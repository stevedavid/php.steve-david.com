<?php
namespace AppBundle\Controller\Admin;

use AppBundle\Core\CoreInterface as Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\FileLocator;

/**
 * @Route("/admin/message")
 *
 * Class MessageController
 * @package AppBundle\Controller\Admin
 */
class MessageController extends Controller implements Core
{
    /**
     * @Route("/{folderName}", name="admin_message_index", requirements={"folderName" = "\w+"})
     */
    public function indexAction($folderName = 'tous')
    {
        $filteredMessages = array_filter($this->fetchMessages(), function($message) use($folderName) {
            if($folderName == 'nouveaux') {
                return !$message['lu'];
            }

            if($folderName == 'corbeille') {
                return $message['corbeille'];
            }

            return !$message['corbeille'];
        });

        return $this->render('views/admin/message/index.html.twig', [
            'messages'        => $filteredMessages,
            'folder'          => $folderName,
            'corbeille_count' => $this->countMessages()['corbeille'],
            'nouveaux_count'  => $this->countMessages()['nouveaux'],
            'messages_count'  => $this->countMessages()['messages'],
        ]);
    }

    /**
     * @Route("/voir/{id}", name="admin_message_voir", requirements={"id" = "\d+"})
     */
    public function voirAction($id)
    {
        $yamlManager = $this->get(self::YAML_MANAGER);

        $messages = $this->fetchMessages();

        $messages[$id]['lu'] = 1;

        $yamlManager->saveData($yamlManager->locateFile(self::YML_CONTACT), $messages);

        return $this->render('views/admin/message/voir.html.twig', [
            'message'         => $messages[$id],
            'id'              => $id,
            'corbeille_count' => $this->countMessages()['corbeille'],
            'nouveaux_count'  => $this->countMessages()['nouveaux'],
            'messages_count'  => $this->countMessages()['messages'],
        ]);
    }

    /**
     * @Route("/supprimer/{id}", name="admin_message_supprimer", requirements={"id" = "\d+"})
     */
    public function supprimerAction($id)
    {
        $yamlManager = $this->get(self::YAML_MANAGER);

        $messages = $this->fetchMessages();

        $messages[$id]['corbeille'] = (int) !$messages[$id]['corbeille'];

        $yamlManager->saveData($yamlManager->locateFile(self::YML_CONTACT), $messages);

        return $this->redirect($this->generateUrl('admin_message_index'));
    }

    private function countMessages()
    {
        $messages = $this->fetchMessages();

        $corbeille = array_count_values(array_map(function($message) {
            return $message['corbeille'];
        }, $messages));

        $nouveaux = array_count_values(array_map(function($message) {
            return $message['lu'];
        }, $messages));

        return [
            'corbeille' => array_key_exists(1, $corbeille) ? $corbeille[1] : 0,
            'messages'  => array_key_exists(0, $corbeille) ? $corbeille[0] : 0,
            'nouveaux'  => array_key_exists(0, $nouveaux)  ? $nouveaux[0]  : 0,
        ];
    }

    private function fetchMessages()
    {
        return array_reverse($this->get(self::YAML_MANAGER)->loadData(self::YML_CONTACT), true);
    }
}
<?php

class CrudController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->assets->addCss('css/style.css');
        $model = new User();
        $this->view->data = $model->find();
    }

    public function addAction()
    {
        $this->assets->addCss('css/style.css');
    }

    public function createAction()
    {
        // $model->username = $this->request->getPost('username');
        // $model->password = $this->request->getPost('password');
        $model = new User();
        $path = '../public/img/';

        if ($this->request->isPost()) {

            if ($this->request->hasFiles(true)) {
                foreach ($this->request->getUploadedFiles(true) as $file) {
                    /* @var $file \Phalcon\Http\Request\FileInterface */
                    $fileName = $file->getName();
                    $temporaryName = $file->getTempName();

                    if ($file->moveTo($path . $fileName)) {
                        // OK! File uploaded and stored.
                        $fileIsLocatedAt = $path . $fileName;
                        $data = array(
                            'username' => $this->request->getPost('username'),
                            'password' => $this->request->getPost('password'),
                            'foto' => $fileName
                        );

                        $model->assign($data);


                        if ($model->save()) {
                            echo "berhasil";
                        } else {
                            echo "gagal";
                        }

                    } else {
                        // Oops, there's been a problem uploading.
                    }
                }
            }

        }
        $this->response->redirect('crud');
    }

    public function deleteAction($id)
    {
        $model = new User();

        $data = $model->findFirst($id);

        $data->delete();

        $this->response->redirect('crud');
    }

    public function editAction($id)
    {
        $this->assets->addCss('css/style.css');
        $model = new User();
        $this->view->data = $model->findFirst($id);

    }

    public function updateAction()
    {
        $model = new User();

        $array = $this->request->getPost();
        $data = $model->findFirst($array['id']);

        $data->assign($array);
        $data->save();
        $this->response->redirect('crud');
    }

}


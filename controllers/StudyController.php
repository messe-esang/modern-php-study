<?php

class StudyController
{
    private $studyService;

    public function __construct()
    {
        $this->studyService = new StudyService();
    }

    public function detail(int $id = null)
    {
        if (!$id) {
            http_response_code(404);
            die;
        }

        $study = $this->studyService->getStudy($id);

        extract(array('study' => $study));

        include __DIR__ . '/../views/study-detail.php';
    }
}

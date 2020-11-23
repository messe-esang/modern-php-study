<?php

class StudyService
{
    public function getStudy(int $id)
    {
        $study = new Study();
        
        $study->id = $id;
        $study->language = 'php';
        $study->speech_man = '선현민';
        $study->study_date = new DateTime();
        $study->title = 'Modern PHP Study';

        return $study;
    }
}

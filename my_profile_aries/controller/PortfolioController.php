<?php
require_once 'model/PortfolioModel.php';

class PortfolioController {
    
    public function index() {
        $model = new PortfolioModel();

        $data['personalInfo'] = $model->getPersonalData();
        $data['skills'] = $model->getSkills();
        $data['hobbies'] = $model->getHobbies();
        $data['education'] = $model->getEducation();     
        $data['trainings'] = $model->getTrainings();     
        $data['experiences'] = $model->getExperiences();
        $data['projects'] = $model->getProjects();       
        $data['organizations'] = $model->getOrganizations(); 
        $data['certifications'] = $model->getCertifications();
        $data['socials'] = $model->getSocials();

        extract($data); 
        require_once 'view/home.php';
    }
}
?>
<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            switch($data){
                //Administration
                case "chancellor":
                    echo "Chancellor";
                    break;
                case "VC":
                    echo "Vice Chancellor";
                    break;
                case "director":
                    echo "Director";
                    break;
                case "AO":
                    echo "Administrative Officer";
                      break;
                case "OSD":
                    echo "OSD";
                      break;
                case "FO":
                    echo "Finance Officer";
                     break;
                 case "DA":
                    echo "Dean Of Academics";
                     break;
                case "DSW":
                     echo "Dean Student Welfare";
                     break;
                case "COE":
                     echo "Controller Of Examination";
                     break;
                case "coordinaters":
                     echo "Coordinaters";
                     break;
                case "contact":
                    echo "Contact Us";
                     break;
                case "tenders":
                     echo "Tenders";
                     break;
                case "news_updates":
                     echo "News & Updates";
                     break;
                case "careers":
                    echo "Careers";
                     break;

                //About institute

                case "aboutrgukt":
                     echo "About RGUKT";
                     break;
                case "campuslife":
                    echo "Campus Life";
                     break;
                 case "edusys":
                    echo "Education System";
                    break;
                case "govcouncil":
                    echo "Governing Council";
                    break;
                case "exccouncil":
                    echo "Executive Council";
                     break;
                case "gallery":
                     echo "Photo Gallery";
                      break;
                
                //About Aademics
                case "AcademicPrograms":
                     echo "Academic Programs";
                      break;
                case "AcademicCalender":
                      echo "Academic Calender";
                      break;
                 case "AcademicRegulations":
                      echo "Academic Regulations";
                      break;
                case "curicula":
                      echo "Academic Curicula";
                      break;
                case "departments":
                    echo "Departments";
                      break;
                //Departments
                case "CSE_department":
                    echo "Department of Computer Science Engineering";
                    break;
                case "Civil_department":
                    echo "Department of Civil Engineering";
                    break;
                case "ECE_department":
                    echo "Department of Electronics & communication Engineering";
                    break;
                case "Chemical_department":
                    echo "Department of Chemical Engineering";
                    break;
                case "Mechanical_department":
                    echo "Department of Mechanical  Engineering";
                    break;
                case "MME_department":
                    echo "Department of Metullurgical & material Engineering";
                    break;
                case "Biology_department":
                    echo "Department of Biology Engineering";
                    break;
                case "Chemistry_department":
                    echo "Department of Chemistry";
                    break;
                case "Physics_department":
                    echo "Department of Physics";
                    break;
                case "Math_department":
                    echo "Department of Mathematics";
                    break;
                case "Psycology_department":
                    echo "Department of Psycology";
                    break;
                case "English_department":
                    echo "Department of English";
                    break;
                case "Telugu_department":
                    echo "Department Telugu";
                    break;
                case "Library_department":
                    echo "Department of Library";
                    break;
                case "FA_department":
                    echo "Department of Fine Arts";
                    break;
                case "PE_department":
                    echo "Department Physical Education";
                    break;
                case "Management":
                    echo "Management";
                    break;
                case "events_achievements":
                    echo "Events and Achievements";
                    break;
                default:
                   echo "RGUKT ONGOLE";
            }
        }
         ?>

    </title>
    <link rel="shortcut icon" href="img/rguktlogo.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="img/rguktlogo.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/instituteinfo.css">
    <link rel="stylesheet" href="css/footer.css">


</head>
<body>
    <?php  include_once 'navigation.php';  ?>
    <main>
        <?php
            if(isset($_GET['data'])){
                $data = $_GET['data'];
                switch($data){

                    //administration
                    case "chancellor":
                        include_once 'info/administration/chancellor.php';
                        break;
                    case "VC":
                        include_once 'info/administration/VC.php';
                        break;
                    case "director":
                        include_once 'info/administration/director.php';
                        break;
                    case "AO":
                         include_once 'info/administration/AO.php';
                          break;
                    case "OSD":
                         include_once 'info/administration/OSD.php';
                          break;
                    case "FO":
                         include_once 'info/administration/FO.php';
                         break;
                     case "DA":
                         include_once 'info/academics/DA.php';
                         break;
                    case "DSW":
                         include_once 'info/administration/DSW.php';
                         break;
                    case "COE":
                         include_once 'info/administration/COE.php';
                         break;
                    case "coordinaters":
                        include_once 'info/administration/coordinaters.php';
                         break;
                    case "contact":
                         include_once 'info/contact.php';
                         break;
                    case "tenders":
                         include_once 'info/notifications/tenders.php';
                         break;
                    case "news_updates":
                         include_once 'info/notifications/news_updates.php';
                         break;
                    case "careers":
                         include_once 'info/careers.php';
                         break;
                    case "gallery":
                         include_once 'info/about/gallery.php';
                         break;
                    //About the institute
                    case "aboutrgukt":
                         include_once 'info/about/about_rgukt.php';
                         break;
                    case "campuslife":
                         include_once 'info/about/campus_life.php';
                         break;
                     case "edusys":
                            include_once 'info/about/education_system.php';
                            break;
                    case "govcouncil":
                            include_once 'info/about/governing_council.php';
                            break;
                    case "exccouncil":
                            include_once 'info/about/executive_council.php';
                            break;
                    //Academics
                    case "AcademicPrograms":
                            include_once 'info/academics/academic_programs.php';
                            break;
                    case "AcademicCalender":
                            include_once 'info/academics/academic_calender.php';
                            break;
                    case "AcademicRegulations":
                            include_once 'info/academics/academic_regulation.php';
                            break;
                    case "curicula":
                            include_once 'info/academics/academic_curicula.php';
                            break;
                    case "departments":
                            include_once 'info/academics/departments.php';
                            break;
                    case "events_achievements":
                            include_once 'info/notifications/events_achievements.php';
                            break;
                    
                    //Departments

                    case "CSE_department":
                            include_once "info/faculty/cse.php";
                            break;
                    case "Civil_department":
                        include_once "info/faculty/civil.php";
                        break;
                    case "ECE_department":
                        include_once "info/faculty/ece.php";
                        break;
                    case "Chemical_department":
                        include_once "info/faculty/chem.php";
                        break;
                    case "Mechanical_department":
                        include_once "info/faculty/mech.php";
                        break;
                    case "MME_department":
                        include_once "info/faculty/mme.php";
                        break;
                    case "Biology_department":
                        include_once "info/faculty/biology.php";
                        break;
                    case "Chemistry_department":
                        include_once "info/faculty/chemistry.php";
                        break;
                    case "Physics_department":
                        include_once "info/faculty/physics.php";
                        break;
                    case "Math_department":
                        include_once "info/faculty/math.php";
                        break;
                    case "Psycology_department":
                        include_once "info/faculty/psycology.php";
                        break;
                    case "English_department":
                        include_once "info/faculty/english.php";
                        break;
                    case "Telugu_department":
                        include_once "info/faculty/telugu.php";
                        break;
                    case "Library_department":
                        include_once "info/faculty/library.php";
                        break;
                    case "FA_department":
                        include_once "info/faculty/fine_arts.php";
                        break;
                    case "PE_department":
                        include_once "info/faculty/physical_education.php";
                        break;
                    case "Management":
                        include_once "info/faculty/management.php";
                        break;
                    default:
                       header("Location: index.php");
                       exit();
                }
            }else{
               header("Location: index.php");
               exit();
            }
            
        ?>
    </main>
    <?php  include_once 'footer.php';  ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/smoothscroll.js"></script>

</body>
</html>
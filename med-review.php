<?php
include('header.php')
?>


<main>
    
    <!--Breadcrumb-->
        <section class="bread_sec inner">
            <div class="container">
            <div class="bread_links">
                <ul>
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="active">
                            Med Review
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bread_title">
                <h1>
                    Med Review
                </h1>
            </div>
            <div class="breadcrumb_button_box">
                <a href="#" class="bread_btn">
                    <span>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.4971 21.1165C17.7223 21.1165 18.8971 20.6299 19.7633 19.7634C20.6297 18.8973 21.1163 17.7224 21.1163 16.4972V7.91864C21.1146 6.86694 20.7539 5.8474 20.0938 5.02853C19.4338 4.2094 18.5142 3.64024 17.4869 3.41495V1.31979C17.4869 0.848305 17.2355 0.412571 16.8272 0.176711C16.4189 -0.0589037 15.9156 -0.0589037 15.5074 0.176711C15.0991 0.412584 14.8474 0.848331 14.8474 1.31979V3.2994H11.878V1.31979C11.878 0.848305 11.6265 0.412571 11.218 0.176711C10.8097 -0.0589037 10.3067 -0.0589037 9.89838 0.176711C9.48982 0.412584 9.23835 0.848331 9.23835 1.31979V3.2994H6.26897V1.31979C6.26897 0.848305 6.01725 0.412571 5.60895 0.176711C5.20065 -0.0589037 4.69741 -0.0589037 4.28917 0.176711C3.88086 0.412584 3.6294 0.848331 3.6294 1.31979V3.41495C2.60213 3.64025 1.68253 4.2094 1.02251 5.02853C0.362489 5.8474 0.00173995 6.86688 0 7.91864V16.4972C0 17.7224 0.486592 18.8972 1.35304 19.7634C2.21921 20.6299 3.39406 21.1165 4.61924 21.1165H16.4971ZM2.63937 16.4972V7.91864C2.63937 7.39354 2.84781 6.89008 3.21911 6.51876C3.5904 6.14746 4.09385 5.93903 4.61899 5.93903H16.497C17.0221 5.93903 17.5256 6.14746 17.8969 6.51876C18.2682 6.89006 18.4767 7.3935 18.4767 7.91864V16.4972C18.4767 17.0223 18.2682 17.5258 17.8969 17.8971C17.5256 18.2684 17.0222 18.4769 16.497 18.4769H4.61899C4.09389 18.4769 3.59042 18.2684 3.21911 17.8971C2.84781 17.5258 2.63937 17.0224 2.63937 16.4972Z"
                                fill="white"></path>
                            <path
                                d="M7.50972 14.3233C8.05521 14.8706 8.79606 15.1782 9.5686 15.1782C10.3411 15.1782 11.082 14.8706 11.6275 14.3233L14.7917 11.1624V11.1626C15.1253 10.8288 15.2554 10.3427 15.1333 9.8871C15.0112 9.43122 14.6553 9.07526 14.1997 8.9532C13.7441 8.83112 13.2577 8.96151 12.9242 9.29505L9.7632 12.4593L9.56182 12.6474L8.19267 11.2747C7.85913 10.9411 7.37277 10.8107 6.91716 10.9331C6.46153 11.0551 6.10557 11.4111 5.98351 11.8667C5.86143 12.3223 5.99157 12.8087 6.32511 13.1422L7.50972 14.3233Z"
                                fill="white"></path>
                        </svg>
                    </span>
                    Book an Appointment
                </a>
                <a href="#" class="bread_btn">
                    <span>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.1404 16.2183L19.3691 13.4542C18.8214 12.8881 18.16 12.5911 17.4595 12.5911C16.7627 12.5911 16.0976 12.8881 15.5331 13.4468L14.0892 14.8854C14.0165 14.8483 13.9476 14.813 13.8824 14.7815C13.7129 14.698 13.5489 14.6144 13.4092 14.5263C11.9448 13.6 10.61 12.3869 9.32725 10.8211C8.76088 10.1083 8.36964 9.51056 8.08646 8.92026C8.45161 8.5787 8.79629 8.23159 9.12233 7.89745C9.2602 7.75823 9.40366 7.61437 9.54431 7.47516C10.1219 6.89971 10.4274 6.2296 10.4274 5.53722C10.4274 4.84112 10.1219 4.17101 9.54431 3.59929L8.16751 2.22751C8.01102 2.07159 7.86199 1.92122 7.7092 1.76067L7.70174 1.75325C7.40179 1.4451 7.07761 1.11747 6.75344 0.818612C6.20383 0.282153 5.5471 0 4.8531 0C4.16377 0 3.50051 0.28586 2.93414 0.824196L1.19964 2.55237C0.499127 3.24385 0.102286 4.08843 0.0212531 5.06288C-0.0718988 6.22305 0.139557 7.44818 0.687305 8.91276C1.5117 11.1449 2.75345 13.21 4.59228 15.4124C6.82052 18.0669 9.51268 20.1663 12.5894 21.6542L12.5913 21.6561C13.7818 22.2176 15.3748 22.8766 17.1371 22.9907H17.1576C17.26 22.9954 17.3644 23 17.4761 23C18.7411 23 19.7602 22.5638 20.592 21.6653C20.606 21.6486 20.6246 21.6301 20.6432 21.605C20.8761 21.3284 21.1416 21.0686 21.4257 20.7975L21.4909 20.7344C21.7564 20.482 21.966 20.2731 22.1523 20.0801C22.7093 19.5028 23.0019 18.8318 23 18.1384C23 17.4423 22.7019 16.7787 22.1383 16.2172L22.1404 16.2183ZM1.94301 5.22725C1.98959 4.70005 2.18706 4.28054 2.56249 3.90743L4.27837 2.19781C4.46654 2.01683 4.66496 1.91937 4.84846 1.91937C5.07203 1.91937 5.27044 2.07251 5.39621 2.19967L5.41018 2.21359C5.67102 2.4549 5.92251 2.71013 6.188 2.97931L6.3091 3.10182C6.38828 3.1835 6.46933 3.26425 6.55129 3.34779C6.63047 3.42668 6.70965 3.50743 6.78883 3.5891L8.16937 4.96461C8.31376 5.10847 8.48609 5.32657 8.48609 5.54469C8.48609 5.7628 8.31375 5.9809 8.16937 6.12477C8.09671 6.19717 8.02498 6.26863 7.95232 6.34288C7.88246 6.41528 7.81073 6.48675 7.73807 6.55914L7.64026 6.6566C7.25088 7.04826 6.88106 7.41951 6.48329 7.77499L6.44417 7.81397C5.84055 8.41539 6.04825 9.03724 6.11627 9.24144C6.12092 9.25815 6.12558 9.26929 6.13024 9.28321L6.13955 9.30641C6.51682 10.2067 7.03382 11.0467 7.8163 12.0277L7.81816 12.0295C9.22662 13.7605 10.7134 15.1081 12.3639 16.155C12.5456 16.2729 12.7291 16.3666 12.9089 16.4539C12.9415 16.4706 12.9759 16.4864 13.0095 16.5049L13.0113 16.5068C13.1809 16.5903 13.3448 16.6738 13.4846 16.762L13.5265 16.7852C13.5405 16.7926 13.5544 16.8019 13.5684 16.8084C13.7733 16.9124 13.9848 16.9662 14.1972 16.9662C14.5558 16.9662 14.8819 16.8223 15.166 16.5374L16.894 14.8157C17.029 14.6811 17.234 14.5233 17.4575 14.5233C17.6858 14.5233 17.8842 14.6997 17.9839 14.8064L17.9885 14.8111L20.7784 17.5863C21.179 17.9854 21.1715 18.3381 20.7598 18.765L20.7551 18.7696C20.5595 18.9785 20.3527 19.178 20.1571 19.3655L20.1012 19.4184C19.7891 19.72 19.4677 20.031 19.1678 20.3883C18.7113 20.8756 18.1915 21.0918 17.4836 21.0918C17.4184 21.0918 17.3438 21.0872 17.2693 21.0825C15.8236 20.9897 14.4608 20.4217 13.4332 19.9335C10.6062 18.5691 8.13106 16.6387 6.07877 14.193C4.38524 12.1623 3.24882 10.2764 2.49692 8.25485C2.05165 7.06221 1.87279 6.09695 1.94266 5.22447L1.94301 5.22725Z"
                                fill="#fff" />
                        </svg>
                    </span>
                    1800 102 9102
                </a>
            </div>
        </div>
    </section>
        
        
        <!--Breadcrumb section End-->

<section class="p_100">
    <div class="container">
        <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Jaypee Med Review - Vol. 9 (April -19 June-19)
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Med_Review Vol 9 April’19 - June’19.pdf#page=3">Is Metastatic Breast Cancer Curable?</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Med_Review Vol 9 April’19 - June’19.pdf#page=4">ABO Incompatible Third Kidney Transplant with Nephrectomy of Previous Allograft with Double Ureteric Reimplantation</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Med_Review Vol 9 April’19 - June’19.pdf#page=5">Osteoporotic Vertebral Compression Fractures and Cement Augmentation – Vertebroplasty & Kyphoplasty</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Med_Review Vol 9 April’19 - June’19.pdf#page=6">Heel Reconstruction By Gracilis Free Flap</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Med_Review Vol 9 April’19 - June’19.pdf#page=7">Sutureless Small Incision Squint Surgery</a></li>
              </ul>
            
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Jaypee Med Review - Vol. 8 (April -18 June-18)
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=3">Laparoscopic surgery for Neovagina construction in MRKH Syndrome</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=5">Spinal Deformity</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=6">Tetanus - a forgotten Illness</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=7">Living Donor Liver Transplantation with Complex reconstruction for Advanced Hepatic Echinococcus Alveolaris at Jaypee Hospital</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=9">Laparoscopic Restorative Proctocolectomy with Lleal Pouch Anal Anastomosis(RP-IPAA)</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=10">Free Function Gracilis Muscle Transfer for reconstruction of Extensor Muscle Loss at Forearm</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=11">ABO Incompatible Third Kidney Transplant with Nephrectomy of Previous Allograft with Double Ureteric Reimplantation</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol - 8 (April -18  June-18).pdf#page=12">Capsular Tension Ring in Traumatic Cataract Surgery</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Jaypee Med Review - Vol. 7 (Jan-18 -Mar -18)
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol 7  (Jan-18 -Mar -18).pdf#page=3">Cochlear implantation in Waardenburg syndrome: Case report and literature review</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol 7  (Jan-18 -Mar -18).pdf#page=7">Video Assisted Thoracoscopic Surgery- State-of-the-Art Care at Jaypee Hospital</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol 7  (Jan-18 -Mar -18).pdf#page=10">Case By Dr. Pawan Gupta and Praveen Mendiratta Commando surgery without Facial scar: Is it feasible?</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol 7  (Jan-18 -Mar -18).pdf#page=5">Congenital spinal cord deformity (Diastematomyelia Type 1-split cord malformation)</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol 7  (Jan-18 -Mar -18).pdf#page=8">Ruptured Aneurysmal Subarachnoid haemorrhage (Anterior Communicating Artery and Internal Carotid Artery Aneurysm)</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol 7  (Jan-18 -Mar -18).pdf#page=12">Budd Chiari syndrome</a></li>
              </ul>
            
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Jaypee Med Review - Vol.6 (Jul-17- Aug-17)
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=3">Critical Aortic Stenosis in Neonates and Infants: Two Different Scenarios and Outcomes</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=6">Simultaneous Endovascular Treatment in Bilateral Large ICA Para-ophthalmic Aneuryms with Optic Pathway Compression</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=10">Adult Onset Craniopharyngioma (Sellar Suprasellar Mass)</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=13">Management of Severe Early Childhood Caries in a Pre-cooperative Child under General Anaesthesia</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=4">Spinal Deformity & Vertebral Compression Fracture in Elderly</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=8">Breast Carcinoma in a Young Patient and various related issues</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee Med Review - Vol.6 (Jul-17- Aug-17).pdf#page=12">A Ray of Hope for Corneal Blindness: Penetrating Keratoplasty</a></li>
                </ul>
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Jaypee Med Review - Vol. 5 (Apr17-June17)
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=3">Critical Congenital Heart Disease in a New Born</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=6">Total Body Irradiation in a case of ALL Bone Marrow Transplant</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=10">Uterine Artery Embolisation in Adenomyosis with Uterine Fibroids</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=12">Reduction Mammoplasty Procedure</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=5">Total Hip Replacement in Adult Dysplastic Hip</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=8">Laparoscopic Colorectal Surgery: New Paradigm towards Excellence</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=11">Endoscopic Stone Management in a Child with Bilateral Partial Staghorn Calculus</a></li>
                  <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._5_(Apr17-June17).pdf#page=13">Uterine Fibroids- Endoscopic Removal (Hystero-Laparoscopy)</a></li>
              </ul>
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Jaypee Med Review - Vol. 4 (Jan17-Mar17)
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=3">ABO Incompatible Kidney Transplantation</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=5">Successful Allogeneic Stem Cell Transplant for very severe Aplastic Anaemia</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=7">Emergency Intervention for a complex Cyanotic CHD</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=10">Endovascular Treatment in Subarachnoid haemorrhage with Complex Intracranial Aneurysm</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=14">Endometriosis &amp; Infertility: Twin pregnancy achieved through Laparoscopic Surgery &amp; IVF</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=4">Right Frontal Arteriovenous Malformation (AVM)</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=6">Procedure for Blocked BT Shunt</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=8">Recurrent Stent Thrombosis: A Mystery</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._4_(Jan17-Mar17).pdf#page=12">Complex Suprasphincteric Fistula-in-Ano</a></li>
                </ul>
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Jaypee Med Review - Vol. 3 (Oct16-Dec16)
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=1">Primary Angioplasty in Anomalous Left Circumflex Artery</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=6">The Single-Tunnel Suture Fixation of Posterior Curciate Ligament Avulsion Fracture</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=9">Endovascular Treatment in Abdominal Bleed in Gun Shot Injury</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=13">Roux-en-Y Gastric Bypass- A novel approach to Diabesity</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=16">3D Conformal High Dose Rate (HDR) Brachytherapy in medically inoperable case of Carcinoma Endometrium</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=18">Heel Reconstruction by Gracilis Free Flap</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=4">A rare case of Giant Cell Tumour Treated with Excision and Knee Joint Replacement</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=8">Surgical Correction of Scoliosis</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=11">Case Report on Distal Pancreatic Adenocarcinoma</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=15">Myeloablative Allogenic BMT in older patient of Leukemia</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._3_(Oct16-Dec16).pdf#page=17">Renal stones in potential live kidney Donor: Ex Vivo Ureteroscopy in Explanted Allograft before Transplantation</a></li>
                </ul>
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Jaypee Med Review - Vol. 2 (July16-Sept16)
              </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=1">Permanent Pacemaker Implantation in Acute Myocardial Infarction</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=6">Intradural Tumor Excision</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=8">Gender Dysphoria- A Case Report</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=10">Cystic Tumor of Pancreas</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=14">Frameless Non-Invasive X-Knife Radiosurgery in a case of Arteriovenous Malformation</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=5">Multi-vessel coronary bypass with aortic valve replacement and mitral valve repair</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=7">Combined Ring Disruption and T type Acetabular fracture with posterior dislocation hip in a Young male- A surgical challenge</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=9">Laparoscopic Mini-Gastric Bypass</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=12">Endovascular Repair of Abdominal Aorta Aneurysm (EVAR-AAA)</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=15">Bone Marrow Transplant: Everyone has a donor</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=16">Mullerian Duct Cyst with Bladder Outlet Obstruction in a new born</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=18">Experience of a Living Donor Kidney Transplant Programme</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._2_(July16-Sept16).pdf#page=20">Pregnancy with intracranial hemorrhage</a></li>
                </ul>
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                Jaypee Med Review - Vol. 1 (Apr16-June16)
              </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=1">Challenging biventricular repair in a case of complex congenital heart disease</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=5">An inspiring tale of revival in a case of Coronary Calcification</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=8">Enterococcus Faecalis Endocarditis of Bicuspid Aortic Valve with AML Perforation</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=11">Broken Hip Replacement- A Case Report</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=15">Martinez Universal Perineal Interstitial Template (MUPIT) implant in a case of recurrent Carcinoma Endometrium</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=17">Surviving against all odds A CASE REPORT</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=19">Vision restored in a young girl with Idiopathic Intracranial Hypertension (IIH)</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=4">Life of a 15 year old girl saved in a 12-hour long rare heart surgery</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=7">Keep a healthy heart so we won’t be apart</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=10">Now age is no bar for joint replacement</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=12">Painless Hair Transplant</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=16">Surgery performed for coffin area of the oral cavity</a></li>
                    <li><a target="_blank" href="https://www.jaypeehealthcare.com/sites/default/files/pdf/Jaypee_Med_Review_-_Vol._1_(Apr16-June16).pdf#page=18">Total Laparoscopic Hysterectomy for large uterus with cervical fibroid</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
</section>



    
</main>

<?php
include('footer.php')
?>
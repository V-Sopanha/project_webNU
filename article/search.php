<?php include('header.php'); ?>
<main class="sport">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            RESULT SEARCH
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <?php 
                    for($i=0 ;$i<6 ;$i++) {
                        echo '
                        <div class="col-4">
                            <figure>
                                <a href="">
                                    <div class="thumbnail">
                                        <img src="https://via.placeholder.com/350x200" alt="">
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                                        <div class="date">17/July/2022</div>
                                        <div class="description">
                                            លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>
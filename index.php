<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - UNOPS</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 70px;
            z-index: 1000;
            background-color: transparent;
            transition: background-color 0.4s ease, box-shadow 0.4s ease;
        }

        /* état après scroll */
        .scrolled {
            background-color: green;
            box-shadow: 0 4px 12px rgba(0,0,0,0.35);
            z-index: 1000;
        }
    </style>
</head>
<body>

    <!-- MENU PRINCIPAL -->
    <?php include 'inc/header.php'; ?>

    <main>
        <section id="section1">
            <div class="bg-slideshow">
                <div class="slide active"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>

            <div class="overlay"></div>

            <div class="hero-content">
                <h1>UNOPS</h1>
                <p>Construire aujourd'hui, protéger demain</p>
            </div>
        </section>

        <section id="section2">
            <div id="maisons">
                <div class="slide-maison active"></div>
                <div class="slide-maison"></div>
                <div class="slide-maison"></div>
                <div class="texte">
                    <p id="moins">
                        En Haïti, les actes de banditisme armé ont conduit à la destruction et à l’incendie de nombreuses habitations, 
                        affectant directement le cadre de vie des populations. Ces attaques ciblent les maisons, 
                        infrastructures essentielles de la stabilité familiale et communautaire, et fragilisent durablement le tissu urbain et résidentiel.

                        La destruction des habitations engendre des pertes matérielles majeures et compromet 
                        les conditions minimales de sécurité, de salubrité et de dignité au sein des quartiers touchés. 
                        Les maisons endommagées ou incendiées deviennent souvent inhabitables, exposant les structures 
                        existantes à une dégradation accélérée et augmentant les risques sanitaires et environnementaux.

                        Face à cette situation, la protection du patrimoine résidentiel et la réhabilitation des 
                        habitations constituent des priorités stratégiques. La reconstruction de maisons durables, 
                        résistantes et adaptées au contexte local est essentielle pour restaurer des conditions de 
                        vie <a class="plus" href="#paragraphe" style="color:blue;">Voir plus</a> 
                    </p>
                    <p id="paragraphe">
                        sûres et renforcer la résilience des communautés.

                        L’intervention des organisations humanitaires, des agences des Nations Unies et de leurs 
                        partenaires vise à soutenir la réparation, la reconstruction et l’amélioration des habitations affectées, 
                        dans le respect des normes techniques, environnementales et sociales. Ces actions contribuent à la 
                        stabilisation des zones touchées et à la préservation du droit à un logement sûr et digne.
                        <a class="moins" href="#moins" style="color:blue">Voir moins</a>
                    </p>
                </div>
            </div>
            <div id="victimes">
                <div class="slide-victime active"></div>
                <div class="slide-victime"></div>
                <div class="slide-victime"></div>
                <div class="slide-victime"></div>
                <div class="texte">
                    <p id="moins1">
                        La recrudescence des actes de violence armée en Haïti a provoqué des déplacements massifs et prolongés de populations civiles, 
                        touchant de manière différenciée les marchandes, propriétaires occupants, locataires et entrepreneurs, et perturbant profondément 
                        les systèmes socio-économiques locaux. Les marchandes perdent leurs stocks et voient 
                        leurs chaînes d’approvisionnement et leurs revenus immédiatement interrompus, 
                        tandis que les propriétaires abandonnant leur résidence font face à 
                        l’occupation illégale, au vandalisme et à la dégradation de leurs biens. 
                        Les locataires subissent une instabilité résidentielle aiguë, la perte de 
                        garanties locatives et l’accès limité à des logements adéquats, alors que les 
                        entrepreneurs voient leurs installations, équipements et relations commerciales 
                        fortement affectés, compromettant la continuité de leurs activités productives. 
                        Ces déplacements entraînent une précarisation généralisée, augmentent la <a class="plus1" href="#paragraphe1" style="color:blue;">Voir plus</a>
                    </p>
                    <p id="paragraphe1">
                        dépendance à l’assistance humanitaire et 
                        compliquent le relèvement socio-économique. Les interventions des agences des Nations Unies, notamment de l’UNOPS, 
                        visent à soutenir la mise en place d’abris temporaires, garantir l’accès aux services essentiels, protéger les moyens 
                        de subsistance et créer les conditions techniques et sécuritaires permettant le retour volontaire, la réinstallation ou 
                        l’intégration locale durable, dans une approche intégrée combinant sécurité, logement, relèvement économique et 
                        planification territoriale afin de réduire la durée et l’impact des déplacements et renforcer la résilience des populations affectées.
                        <a class="moins1" href="#moins1" style="color:blue">Voir moins</a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'inc/footer.php'; ?>

    <!-- JS SLIDESHOW -->
    <script>
        /* =========================
        SLIDESHOWS
        ========================= */
        const slides = document.querySelectorAll(".slide");
        const slidesMaison = document.querySelectorAll(".slide-maison");
        const slidesVictime = document.querySelectorAll(".slide-victime");

        let index = 0;
        let indexMaison = 0;
        let indexVictime = 0;

        setInterval(() => {

            if (slides.length) {
                slides[index].classList.remove("active");
                index = (index + 1) % slides.length;
                slides[index].classList.add("active");
            }

            if (slidesMaison.length) {
                slidesMaison[indexMaison].classList.remove("active");
                indexMaison = (indexMaison + 1) % slidesMaison.length;
                slidesMaison[indexMaison].classList.add("active");
            }

            if (slidesVictime.length) {
                slidesVictime[indexVictime].classList.remove("active");
                indexVictime = (indexVictime + 1) % slidesVictime.length;
                slidesVictime[indexVictime].classList.add("active");
            }

        }, 4000);


        /* =========================
        HEADER SCROLL
        ========================= */
        const header = document.querySelector("header");

        window.addEventListener("scroll", () => {
            if (window.scrollY >= 100) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });


        /* =========================
        VOIR PLUS / VOIR MOINS
        MAISONS
        ========================= */
        const plusMaison = document.querySelector(".plus");
        const moinsMaison = document.querySelector(".moins");

        const boiteMaison = document.querySelector("#maisons");
        const texteMaison = boiteMaison.querySelector(".texte");

        plusMaison.addEventListener("click", (e) => {
            e.preventDefault();

            boiteMaison.style.height = "500px";
            texteMaison.style.transform = "translateY(-50px)";

            plusMaison.style.display = "none";
            moinsMaison.style.display = "inline";
        });

        moinsMaison.addEventListener("click", (e) => {
            e.preventDefault();

            boiteMaison.style.height = "400px";
            texteMaison.style.transform = "translateY(0)";

            plusMaison.style.display = "inline";
            moinsMaison.style.display = "none";
        });


        /* =========================
        VOIR PLUS / VOIR MOINS
        VICTIMES
        ========================= */
        const plusVictime = document.querySelector(".plus1");
        const moinsVictime = document.querySelector(".moins1");

        const boiteVictime = document.querySelector("#victimes");
        const texteVictime = boiteVictime.querySelector(".texte");

        plusVictime.addEventListener("click", (e) => {
            e.preventDefault();

            boiteVictime.style.height = "535px";
            texteVictime.style.transform = "translateY(-68px)";

            plusVictime.style.display = "none";
            moinsVictime.style.display = "inline";
        });

        moinsVictime.addEventListener("click", (e) => {
            e.preventDefault();

            boiteVictime.style.height = "400px";
            texteVictime.style.transform = "translateY(0)";

            plusVictime.style.display = "inline";
            moinsVictime.style.display = "none";
        });
    </script>


</body>
</html>

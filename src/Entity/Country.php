<?php

namespace App\Entity;

class Country
{
    private $imgPays;
    private $imgCap;
    private $nom;
    private $para1;
    private $para2;
    private $para3;
    private $para4;
    public static $kindercountry = [];

    public function __construct($imgPays, $imgCap, $nom, $para1, $para2, $para3, $para4)
    {
        $this->imgPays = $imgPays;
        $this->imgCap = $imgCap;
        $this->nom = $nom;
        $this->para1 = $para1;
        $this->para2 = $para2;
        $this->para3 = $para3;
        $this->para4 = $para4;
        self::$kindercountry[] = $this;
    }

    public function getImgPays()
    {
        return $this->imgPays;
    }

    public function getImgCap()
    {
        return $this->imgCap;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPara1()
    {
        return $this->para1;
    }

    public function getPara2()
    {
        return $this->para2;
    }

    public function getPara3()
    {
        return $this->para3;
    }

    public function getPara4()
    {
        return $this->para4;
    }

    public static function creerPays()
    {
        $p1 = new Country(
            "flagsouthkorea",
            "seoul",
            "Corée du Sud",
            "Séoul (en coréen : 서울), officiellement la Ville spéciale de Séoul (hangeul : 서울특별시), est la plus
            grande ville et la capitale de la Corée du Sud. Si Séoul reste le siège de l'Assemblée nationale et de la
            présidence, nombre de ministères et d'institutions nationales ont été transférées dans la ville nouvelle de
            Sejong, capitale administrative de facto depuis 2013.",
            "Située sur le fleuve Han, au nord-ouest du pays, elle compte une population d'environ onze millions
            d'habitants intra-muros et 27 625 000 dans son aire urbaine (qui inclut notamment Incheon)5, ce qui fait
            d'elle la quatrième mégapole la plus peuplée au monde après Tokyo, São Paulo et Jakarta, et juste devant
            Manille. En outre, la ville est le lieu de résidence de plus de la moitié de la population sud-coréenne. La
            zone démilitarisée (DMZ) est, quant à elle, à environ 45 kilomètres du centre-ville.",
            "Fondée il y a deux mille ans par le royaume Baekje, l'un des Trois Royaumes de Corée, Séoul est pendant plus
            de cinq cents ans la capitale du royaume de Joseon. À la fin du xixe siècle, rompant avec une longue
            tradition d'isolement, Séoul s'ouvre aux étrangers et notamment aux États-Unis : elle est la première ville
            d'Asie de l'Est à avoir l'électricité, l'eau courante, le téléphone et un réseau de tramway. Occupée par le
            Japon de 1910 à 1945 et rebaptisée Gyeongseong, la ville devient la capitale de la république de Corée lors
            de sa proclamation en 1948. Elle sera gravement endommagée lors des conflits de la guerre de Corée, dont la
            bataille de Séoul fut l'un des évènements majeurs : le palais de Gyeongbokgung et sa grande porte sont
            notamment incendiés. Reconstruite dans les années 1960 et 1970, avec l'aide des États-Unis, elle connaît une
            forte industrialisation et devient le visage d'une Corée du Sud en voie de modernisation. Depuis les années
            1990, Séoul a vu sa population croître de manière importante, notamment grâce à l'afflux de populations
            venues des campagnes.",
            "Siège des plus grandes entreprises coréennes (les chaebol /hangeul : 재벌/), dont Samsung, LG et Hyundai,
            Séoul est considérée comme une ville globale. Son niveau de vie très élevé et son PIB – le quatrième au
            monde pour une aire urbaine après Tokyo, New York et Los Angeles – en font l'un des principaux centres
            économiques au monde. Le quartier branché de Gangnam et la Digital Media City concentrent des entreprises
            dans les nouvelles technologies. La ville compte de nombreux bâtiments à l'architecture futuriste, comme le
            Dongdaemun Design Plaza et la Lotte Super Tower 123, qui atteint les 555 mètres de hauteur en 2016 et
            dépasse la N Seoul Tower. Symbole de son rayonnement, Séoul a organisé plusieurs grands évènements
            internationaux, dont les Jeux asiatiques de 1986, les Jeux olympiques d'été de 1988, la Coupe du monde de
            football de 2002 et le Sommet du G20 de novembre 2010.",
            "Importante destination touristique, Séoul compte trois monuments classés au patrimoine mondial de l'UNESCO :
            le palais de Changdeokgung, le sanctuaire de Jongmyo et plusieurs tombes royales de la dynastie Joseon. En
            raison de sa forte densité de population, plus de trois millions de véhicules y sont comptabilisés, ce qui
            entraîne des embouteillages quotidiens, même au-delà de minuit. Enfin, en tant que cœur culturel du pays,
            Séoul est le berceau de la K-pop et de la diffusion de la culture coréenne à travers le monde (hallyu
            /hangeul : 한류/)",
            "En 2018, Séoul a rejoint le mouvement Fab City, suivant l'appel lancé par le maire de Barcelone, Xavier
            Trias, à ce que toutes les villes du monde deviennent autosuffisantes pour 20546."
        );

        $p2 = new Country(
            "flagjapan",
            "tokyo",
            "Japon",
            "Tokyo (en japonais : 東京, litt. « Capitale de l'est »), anciennement Edo (江戸?),
            officiellement Métropole de Tokyo (東京都, Tōkyō-to), est de facto la capitale actuelle du Japon. Elle est la
            plus peuplée des préfectures du Japon, avec plus de 14 831 421 habitants intra-muros en 2018 et 42 794 714
            dans l'agglomération4, et forme l'aire urbaine la plus peuplée au monde.",
            "Située sur la côte est de l'île principale de l'archipel japonais, Honshū, Tokyo est l'une des quarante-sept
            préfectures du Japon. Principal centre politique de l'archipel depuis le xviie siècle, la ville accueille la
            plupart des institutions du pays : la résidence principale de l'empereur du Japon, du Premier ministre, le
            siège de la Diète (le parlement japonais), du Cabinet, les ministères qui le constituent ainsi que toutes
            les ambassades étrangères.",
            "À l'origine, Tokyo était un petit village de pêcheurs nommé Edo (« l'estuaire »). Fortifié au xve siècle,
            Edo devient la base militaire du shogun Tokugawa Ieyasu à la fin du xvie siècle, puis la capitale de son
            gouvernement féodal. Durant l’époque d'Edo (1603-1868), la ville se développe et devient l'une des plus
            peuplées au monde à la fin du xviiie siècle, avec une population de près d'un million d'habitants. Avec la
            restauration de l'empereur en 1868, elle est confortée dans son rôle de cœur politique du Japon : le château
            d'Edo devient la résidence de l'empereur Meiji (Kōkyo), et la ville acquiert son nom actuel par opposition à
            Kyoto, l'ancienne capitale. Elle est ravagée en 1923 par un séisme de magnitude 7,9 qui fait plus de 100 000
            morts. Durant la Seconde Guerre mondiale, elle est détruite pour moitié par des bombardements aériens
            américains. Les bombes incendiaires embrasent la ville et font plus de 100 000 victimes. La ville est
            rapidement reconstruite après la guerre. Dans la seconde moitié du xxe siècle, Tokyo devient une métropole
            de rang mondial grâce à un fort développement industriel — notamment dans l'électronique —, et voit sa
            population multipliée par dix en cinquante ans.",
            "Principal centre économique et financier du Japon, Tokyo est l'une des principales places financières
            asiatiques et mondiales. Elle est la première ville mondiale en ce qui concerne les produits urbains bruts.
            Le dynamique arrondissement de Shinjuku comporte de nombreux gratte-ciels, dont la mairie de la ville, et
            plusieurs grands magasins du Japon. Minato-ku accueille les sièges sociaux de nombreuses entreprises
            japonaises et étrangères, ainsi qu'une cinquantaine d'ambassades. Chiyoda concentre quant à lui les
            institutions politiques japonaises. Enfin, Shibuya est réputé être l'un des quartiers les plus animés de la
            ville, grâce à la présence de grands centres commerciaux comme le 109. Malgré la modernité de son
            architecture, dont témoigne la tour Tokyo Skytree, de nombreux sanctuaires shinto et temples bouddhistes ont
            été reconstruits ou, quelques-uns, partiellement préservés après les bombardements, comme le Sensō-ji, le
            sanctuaire Yasukuni, le Zōjō-ji ou la porte Hōzōmon.",
            "Située au fond de la baie de Tokyo, la commune de Tokyo dispose d'un statut administratif particulier parmi
            les préfectures du Japon, la ville de Tokyo ayant été supprimée en tant qu'entité politique ou
            administrative en 1943. L'agglomération de Tokyo, qui s'étend bien au-delà des limites de la préfecture,
            s'étend sur une large frange de la baie de Tokyo ainsi que sur la région du Kantō. Elle constitue en outre
            le pôle principal de la « mégalopole japonaise », avec notamment Osaka et Nagoya. La préfecture a organisé
            les Jeux olympiques d'été de 1964 et de 2021.",
            "En 2021, Tokyo est considérée comme la troisième ville mondiale selon le classement Global Power City
            Index. Elle est classée quatrième ville mondiale par le classement du cabinet de conseil Kearney."
        );

        $p3 = new Country(
            "flagchina",
            "beijing",
            "Chine",
            "Pékin (chinois : 北京 ; pinyin : Běijīng, litt. « capitale du nord »), ou Beijing, est la capitale de la
            république populaire de Chine. Située dans le Nord-Est du pays, la municipalité de Pékin, d'une superficie
            de 16 800 km², est entourée par la province du Hebei ainsi que la municipalité de Tianjin. Pékin est
            considérée comme le centre politique et culturel de la Chine, tandis que Hong Kong et Shanghai dominent sur
            le plan économique.",
            "D'abord ville périphérique de l'empire chinois sous les Han et les Tang, elle prend de l'importance lorsque
            les Jurchen, qui fondent la dynastie Jin, la choisissent comme leur capitale principale en 1153. Le prince
            mongol Kubilai Khan en fait de même sous le nom de Dadu (« grande métropole »), enfin les Ming y transfèrent
            leur administration en 1421, parachevant le choix de Pékin comme capitale de la Chine. Située à proximité de
            la Grande Muraille, Pékin abrite des monuments célèbres comme la Cité interdite et le Temple du ciel, qui
            sont inscrits au patrimoine mondial. De nombreuses réalisations architecturales et structurelles ont modifié
            la ville à l'occasion des Jeux olympiques d'été dont elle a été l'hôte en 2008. Pékin a été choisie par le
            CIO pour organiser les Jeux olympiques d'hiver de 2022 et sera la première ville à avoir accueilli les deux
            éditions de l'évènement sportif international.",
            "Avec 21,3 millions d'habitants en 2020, Pékin est la deuxième ville la plus peuplée de Chine après Shanghai.
            La zone urbaine compte quant à elle 19.4 millions d'habitants. Le parler pékinois forme la base du mandarin
            standard. D'un point de vue économique, Pékin est la deuxième ville de Chine par le PIB total derrière
            Shanghai.",
            ""
        );

        $p4 = new Country(
            "flagindia",
            "newdelhi",
            "Inde",
            "New Delhi (en hindi : नई दिल्ली, Naī Dillī), bien plus rarement Nouvelle-Delhi, est la capitale de
            l'Inde. Elle abrite les institutions politiques nationales du pays : le siège du gouvernement de l'Inde, celui du
            Parlement, les résidences du président, du vice-président, du Premier ministre, et le siège de la Cour suprême.",
            "New Delhi constitue une municipalité de près de 250 000 habitants au sein du territoire de Delhi, dont elle
            est également la capitale et qui compte en tout 16,3 millions d'habitants.",
            "New Delhi est une ville nouvelle créée au début du xxe siècle par la volonté des Britanniques de déplacer la
            capitale du Raj britannique, alors à Calcutta, vers une position plus centrale et symbolique. Sa construction a été
            annoncée le 22 mars 1911 par George V lors du durbar. La ville est construite par les architectes Edwin Lutyens et Herbert
            Baker et inaugurée le 13 février 1931 par le vice-roi lord Irwin.",
            "Elle a été désignée par l'Organisation mondiale de la santé (OMS) comme la ville la plus polluée du monde en
            2015."
        );

        $p5 = new Country(
            "flagnorthkorea",
            "pyongyang",
            "Corée du Nord",
            "Pyongyang (en coréen : 평양, selon la romanisation nord-coréenne officielle : Phyŏngyang, prononcé :
            /pʰjʌŋ.jaŋ/ litt. : « la localité calme ») est la plus grande ville et la capitale de la Corée du
            Nord. La population officielle du centre-ville est estimée à 2,5 millions d'habitants en 2013, tandis que
            l'agglomération en rassemble environ 3,3 millions. Sa superficie est de 3 194 km², soit près de trois fois
            celle de Los Angeles. Elle constitue le cœur politique, économique et culturel du pays.",
            "Pyongyang a été fondée dès le Néolithique et porta longtemps le nom de Ryugyŏng (류경). Devenue capitale de la
            dynastie Koguryo au ve siècle, puis de la dynastie Goryeo au xe siècle, la ville est l'une des plus
            importantes de la péninsule coréenne durant le Moyen Âge, avec Séoul et Kaesŏng. Pyongyang fut marquée par
            des affrontements répétés avec le Japon, en 1592 et 1593 lors de la guerre Imjin puis lors du conflit
            sino-japonais de 1894-1895, à l'issue duquel la ville est conquise et occupée jusqu'à la fin de la Seconde
            Guerre mondiale. Bombardée et quasiment rasée durant la guerre de Corée, Pyongyang est rapidement
            reconstruite avec l'aide de l'Union soviétique et devient la capitale de la Corée du Nord.",
            "Son urbanisme et son architecture sont profondément marqués par l'idéologie de la dynastie au pouvoir depuis
            l'indépendance du pays : le style est inspiré de l'architecture stalinienne, avec de grandes avenues, de
            vastes places telles que la place Kim Il-sung, ainsi que des équipements publics de dimension gigantesque,
            comme le Grand Théâtre de l'Est de Pyongyang, l'hôtel Ryugyong — un gratte-ciel pyramidal de plus de 300
            mètres de haut — ou le stade du Premier-Mai, plus grand stade au monde. La ville compte également un réseau
            de métro aux stations richement décorées et un monument dédié à l'idéologie communiste nord-coréenne, la
            Tour du Juche. Cœur économique de la Corée du Nord, Pyongyang accueille enfin plusieurs sites industriels et
            universitaires, dont l'Usine de cosmétiques nationale, l'Institut de recherche architecturale Paektusan et
            le Centre de recherche informatique de Corée.",
            "Pyongyang est traversée par le fleuve Taedong, l'un des principaux cours d'eau du pays. La ville a été
            séparée de la province du Pyongan du Sud en 1946. Son climat est de type continental humide. Elle a le
            statut de ville d'administration directe (Chikhalsi, 직할시), au même titre que les neuf gouvernements
            provinciaux de la RPDC stricto sensu. Réputée extrêmement fermée et difficile d'accès pour les visiteurs
            étrangers, à l'image du pays, elle organise toutefois quelques manifestations culturelles internationales,
            telle  s que le festival international du film de Pyongyang."
        );

        $p6 = new Country(
            "flagcambodia",
            "phnompenh",
            "Cambodge",
            "Phnom Penh (en khmer : ភ្នំពេញ, romanisation : Phnum Pɨñ, /pʰnʊm ˈpɨɲ/ ; littéralement : « Colline de Penh »)
            est la capitale du Cambodge, située dans la moitié sud du pays, au confluent du Tonlé Sap et du Mékong. En
            2019, 2 129 371 Phnompenhois vivent sur les 290 km² du territoire de la municipalité de Phnom Penh.
            Administrativement, Phnom Penh est également une province du Cambodge. Pa Socheatvong en est le gouverneur
            actuel.",
            "Devenue capitale du Royaume à l'époque de l'Indochine française, Phnom Penh était surnommée la « Perle de
            l'Asie » dans les années 1920. Fondée en 1434, la ville s'est beaucoup développée sous l'impulsion de la
            France, développement laissant en héritage nombre de bâtiments à l'architecture européenne et coloniale,
            notamment le long des grands boulevards. Au xxie siècle, Phnom Penh est la ville la plus peuplée du Cambodge
            ainsi que son centre économique et politique.",
            "",
            ""
        );

        $p7 = new Country(
            "flagthailand",
            "bangkok",
            "Thailande",
            "Bangkok (en thaï : กรุงเทพฯ, Krung Thep, « Cité des anges » ou บางกอก), officiellement Krung Thep Maha Nakhon 
            depuis 2022, est la capitale de la Thaïlande. La ville a également le statut de province. Les Thaïlandais 
            l'appellent communément et plus simplement Khrung Thep.",
            "La ville occupe une superficie de 1 569 km2 dans le delta du fleuve Chao Phraya en Thaïlande centrale et 
            son nombre d’habitants est supérieur à 9 millions, plus de 15 millions de personnes habitent l’aire métropolitaine 
            de la capitale, soit plus que tous les autres centres urbains du pays.",
            "Les racines de Bangkok remontent à un petit comptoir commercial créé durant le Royaume d’Ayutthaya au xve 
            siècle au bord du fleuve Chao Phraya qui prend de l’importance avant de devenir le site d’une première capitale, 
            Thonburi, en 1768. Mais la date officielle de sa fondation par Rama Ier, premier roi de la dynastie Chakri, est 
            le 6 avril 1782, sur l’autre rive du fleuve. Bangkok s’inscrit au xixe siècle au cœur du mouvement de modernisation 
            du royaume de Siam, alors que le pays subit la pression des nations colonisatrices européennes. La ville est ensuite 
            au xxe siècle le théâtre de l’évolution politique de la Thaïlande, notamment avec l’abolition de la monarchie absolue, 
            l’adoption d’une constitution, et plusieurs soubresauts politiques parfois violents. La ville a connu une 
            formidable croissance à partir des années 1960 et exerce aujourd’hui une influence centrale sur la vie politique, 
            économique, culturelle, universitaire et médiatique de la Thaïlande1.",
            "Le boom économique asiatique des années 1980 et 1990 a amené beaucoup d’entreprises multinationales à installer 
            leur siège régional à Bangkok. La ville est un important pôle d’affaires. C’est également une plateforme 
            internationale pour les transports et la santé, tout comme pour les arts, la mode, les spectacles et le tourisme. 
            Bangkok fait partie des villes les plus visitées au monde." );
    }

    public static function getCountryByNom($nom)
    {
        foreach (self::$kindercountry as $lePays) {
            if (strtolower($lePays->getNom()) === $nom) {
                return $lePays->getNom();
                // N'OUBLIE PAS LE GET NADOU, NE L'OUBLIE PAS T^T
            }
        }
    }
}

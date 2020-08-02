<?php
  session_start();
  $name = $_SESSION['name'];
  $salary =  $_SESSION['salary'];
  $age = $_SESSION['age'];
  $sex = $_SESSION['sex'];
?>

<?php
  include_once 'dbh.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
            background-image: url(tiranga.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <title>Eligible Schemes | Govt. of Sikkim</title>
</head>

<body>
    <div class="container my-4">
        <h1>Eligible Schemes</h1>
        <p>Welcome <?php echo $name?> | <a href="all-scheme.php">All Schemes</a> | <a href="logout.php">Logout</a> </p>
    </div>
    

    <div class="container my-4">
    <table class="table table-dark">
        <thead class="thead-dark">
        <tr>
            <th>Schemes</th>
            <th>Apply Now</th>
        </tr>
        </thead>
    <?php

    if($salary <= 500000)   //Garib
    {
        echo "<tr><td>Rural Housing Scheme of Government of Sikkim Rural Development Department Under the Rural Housing Scheme of the State Government, economically backward rural households are being provided 30 numbers of GCI sheets and a grant of Rs.15,000/- as house upgradation subsidy in order to take up immediate repair of their houses. Till date 51,255 beneficiaries were benefitted under this scheme.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="confirm.php" role="button">Apply</a></td></tr>';

        echo "<tr><td>Chief Minister Rural Housing Scheme Rural Development Department The Scheme Chief Minister Rural Housing Scheme was aimed to bring about a qualitative improvement in the housing status of the poor by providing them a housing grant. This will result in achieving the status of a Katcha House Free States and reach an important milestone in the Mission: Poverty Free State. The Chief Minister's Rural Housing Mission (CMRHM) was launched in the year 2010 under the State Plan with the sole target of converting the existing 6,000 dwellings to a single storey, earthquake resistant pucca house. The State is all set to become the first katcha house free state in the country. However, such a mammoth task at hand also meant avoiding duplicity with the already existing national flagship scheme of the Ministry of Rural Development, the India Awaas Yojana (IAY). Therefore, the State Government adopted the innovative idea of convergence of the CMRHM with IAY. The two schemes have been converged since 2011-12 with the primary objective of providing a comfortable sizeable house of 605sq/ft.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';
    }

    if($salary <= 20000)    //BPL Category
    {
        echo "<tr><td>Chief Minister's Free Scholarship Scheme (CMFSS) Education Department The State Government launched the Chief Minister's Free Scholarship Scheme with the aim of providing free scholarship to meritorious and needy students. The scholarship is granted annually to a candidate from the BPL category or to one genuinely deserving. It is granted to a student who succeeds in securing admission to any of the top twenty universities in the world in a chosen discipline. The scholarship aims to cover course fees, hostel/accommodation charges, books, stationaries and to & from travelling charges once a year from the institute to the home country, SIDICO is the nodal agency for implementation of this scheme.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';

        echo "<tr><td>Mukhya Mantri Awas Yojana Rural Development Department In the year 2007, the government felt that only distribution of GCI sheets and house upgradation to the rural people who are poorest of the poor is not sufficient and as such introduced a supplementary scheme. Mukhya mantra Awaas Yojana (MMAY) under the housing sector in which a modern house of bricks with CGI roof, toilet, electricity is constructed and handed over to the beneficiaries. Till date 1,188 poorest of the poor beneficiaries have benefitted with Mukhya Mantri Awaas Yojana (MMAY). In order to achieve katcha house free status, the need for defining the term katcha house and strategy to convert them into Pucca House was framed, which resulted in birth of Chief Minister's Rural Housing Scheme in the year 2011.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';

        if ($sex=='f')
        {
            echo "<tr><td>The Mukhya Mantri Sishu Suraksha Yojana Avam Sutkeri Shayog Yojana Health & Family Welfare Department This is another programme unique to Sikkim which again happens to be the brain child of Hon'ble Chief Minister. The Mukhya Mantri Sishu Suraksha Yojana Avam Sutkeri Shayog Yojana has been specifically designed to ensure that every pregnant women of BPL family during delivery receives a cash assistance of Rs.3000/- to enable her to access better health care, good nutrition and also take good care of the new born. Further realizing the importance of correction of gender bias the second child of the BPL mother if it happens to be a female child, the mother will again be entitled for another Rs.3000/- which would be given immediately after the delivery. In this programme a new born first child as well as new born second girl child would also be given an assistance of Rs.500 per month which will continue till the child attains age of 6 years. This is done with the sole idea of providing better nutrition, better health and better overall development of the new born child. The scheme was launched on 15th August 2011 but came into effect 1st September, 2011.</td>";

            echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';            
        }

        if ($age>18 && $age<64)
        {
            echo "<tr><td>Indira Gandhi National Disability Pension Scheme Social Justice & Welfare Department The Indira Gandhi National Disability Pension Scheme is provided to differently abled persons in the age group of 18 to 64 years, belonging to a household of Below Poverty Line category with severe or multiple disability as defined in ‘Persons with Disabilities Act, 1995 (PWD Act 1995)’ and the ‘National Trust for the Welfare of Persons with Autism, Cerebral Palsy, Mental Retardation and Multiple Disabilities Act, 1999 (National Trust Act 1999)’. The Ministry of Rural Development, Government of India provides a sum of Rs. 300/- per month. In addition to this the State Government too grants an amount of Rs. 1200/- per month, thus a beneficiary receives an amount of Rs. 1500/- per month from July 2017 onwards.</td>";

            echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';
        }

    }

    if($age <= 18)  //Bache
    {
        echo "<tr><td>Children's Day Celebration Social Justice & Welfare Department Every year Children Day is celebrated universally on 14th November to commemorate the birth anniversary of Pandit Jawaharlal Nehru. The Children's Day Celebrations are held in all four districts of the State. The participants usually comprise of panchayats, children from ICDS centres. The Children Day celebrations are also marked by organizing small workshops on various themes and issues pertaining to children. Apart from that National Girl Child day is celebrated on 24th January in the State.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';   
    }

    if($age > 18)   //Adult
    {
        echo "<tr><td>Beti Bachao Beti Padhao Social Justice & Welfare Department The Prime Minister of India launched the Beti Bachao Beti Padhao Scheme on 22nd January, 2015 at Panipat in Haryana, an initiative to address issues that affect women in the longer term and to reverse the trend of an adverse and declining Child Sex Ratio. The 100 districts have been identified on the basis of low Child Sex Ratio as per Census 2011 covering all States/UTs as a pilot with at least one district in each state. North Sikkim is identified from the State of Sikkim for implementation of the BBBP Scheme. Objectives: The Overall Goal of the Beti Bachao, Beti Padhao (BBBP) Scheme is to celebrate the girl child and enable her education. The objectives of the Scheme are as under: 1. To prevent gender biased sex selective elimination. 2. To ensure survival and protection of the girl child. 3. To ensure education and participation of the girl child.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';      
    }

    if($age < 14)
    {
        echo "<tr><td>ADIP Scheme Social Justice & Welfare Department The Scheme aims at helping the disabled persons by bringing suitable, durable, scientifically-manufactured, modern, standard aids and appliances within their reach. The estimates, according to Sample Survey conducted by NSSO in 1991, indicate that there are about 16.15 million persons with various types of disabilities in the country. Their disabilities restrict the opportunity for their economic and social growth. In addition, about 3% of the children below 14 years of age suffer from delayed development. Many of them are mentally retarded and cerebral palsied and require some aids/appliances to attain the capacity for self-care and independent living. The main objectives of the Scheme is to assist the needy disabled persons in procuring durable, sophisticated and scientifically manufactured, modern, standard aids and appliances that can promote their physical, social and psychological rehabilitation, by reducing the effects of disabilities and enhance their economic potential. The aids and appliances supplied under the Scheme shall conform to BIS specifications to the extent possible.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';
    }

    if ($age>10 && $age<=22)
    {
        echo "<tr><td>Hon'ble Chief Minister Merit Scholarship Scheme Education Department The scheme launched in 2010 provides opportunities for students from weaker sections of the society to study in best and reputed Public Schools in the State and in other parts of the country. Students who have studied in a Government School from the very beginning and who pass Class V have to qualify through a screening test, after which they are sponsored by the State Government for further studies. Primarily, the Scheme was till Class XII only but from 2016, it has been extended till graduation.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';   
    }

    if ($age>=17)
    {
        echo "<tr><td>Comprehensive Educational Load Scheme (CELS) Education Department The State Government launched the Comprehensive Educational Loan Scheme (CELS) for pursuing higher/professional studies in India and abroad with effect from July 2007, SIDICO is the nodal agency for implementation of this scheme and has witnessed commendable success. The students are undergoing courses in engineering, medicine, agriculture, horticulture, hospitality management, commercial pilot, post graduate courses etc.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';       
    }

    if ($salary<120000)
    {
        echo "<tr><td>Priority Households (PHH) Food & Civil Supplies Department The criteria for selection of PHH beneficiaries were laid down in the Food Security Rules, 2014 as under: All economically weaker households shall be included under Priority Households (PHH) subject to the following criteria: The households shall not have any member in the regular service of State Government/Central Government/Public Sector Undertaking/Army etc. The households shall not have any retired government servant as member of their family; The households shall not have any member in the work-charge service in State Government/Central Government/Public Sector undertaking etc. The households shall not own a taxi or private vehicle in the name of any of the family member; The household shall not own Pucca House (CMRH & REDRH houses are excluded) The households should not be earning house rent more than Rs. 10000 a month from their dwelling house; The household shall not have any member enlisted as government contractor in class I, IA, 2 & 3 categories with sound socio-economic background; The household shall not possess more than 2.5 acres of cultivable land or 5 acres of barren land; The household shall not have agriculture/floriculture/animal husbandry related commercial ventures earning more than Rs. 1.20 lakhs per annum or any other source; All selected households shall possess either of the following documents: Sikkim Subject Certificate (SSC) Certificate of Identification(COI) Voter ID Card issued by the Election Department; Ration Card surrender certificate issued by the Food & Civil Supplies Department of the respective State Government, in case the applicant beneficiary is from outside the State.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';
    }

    if ($sex=='f' && $age>13 && $age<50)
    {
        echo "<tr><td>Small Family Scheme Social Justice & Welfare Department Small family Scheme is a State Programme which was launched during the year 1997, which aims to bring social, economic and psychological changes amongst the women through a social security in the form of incentives. The scheme addresses the women issues from the tender age of thirteen. Objectives of the Scheme: 1. Delayed age at marriage. 2. Providing financial aids for small family norms. 3. Promotion of health, sanitation & family planning. 4. Promotion of control over her fertility. 5. Providing social security during the old age. Eligibility: All adolescent girls of Sikkimese origin who attain 13 years of age. Documents Required 1. Copies of Domicile/Certification of Identification. 2. Copy of Birth Certificate. 3. Three numbers of passport size photographs. Guidelines for Implementation of the Scheme: 1. Girls of 13 years are registered under the scheme Rs. 8000/- per beneficiary is deposited in the bank for a period of 8 years, when the girl reaches 21 years of age. 2. If the registered girl remains unmarried till 21 years of age she becomes eligible for first incentive of Rs. 2000/-. 3. If she marries after attaining 22 years of age, She will receive Rs. 500/-. 4. If she marries at 23 years of age, Rs. 1000/- is paid to her. 5. First child only after 2 years of marriage makes her eligible for an incentive of 1000/-. 6. A gap of 3 years between the first and the second child makes her eligible for another incentive of Rs. 1000/-. 7. Rs. 8000/- will be diverted to cover a new beneficiary and the rest will remain in the bank (fixed deposit) in the name of the beneficiary till she attains fifty years of age.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';   
    }

    if ($sex == 'o')    //Transgender
    {
        echo "<tr><td>Scheme for Transgender Social Justice & Welfare Department The Government has introduced the scheme vide Notification No: 5/SJE&WD dated 27.08.2013 to the Transgender (third Gender) for economic empowerment to ensure their financial security and to come out from their hidden life and give an opportunity to them to take part in the nation building and development activities through securing their life. The monthly allowance of Rs. 2000/= from 0-6 years with 100% sponsorship for the education till graduation level is provided. Thereafter, monthly allowance of Rs. 500/- shall be provided if the incumbent is remained unemployed.</td>";

        echo '<td><a class="btn btn-lg btn-primary btn-block" href="#" role="button">Apply</a></td></tr>';      
    }

    ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
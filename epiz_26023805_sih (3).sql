-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.byetcluster.com
-- Generation Time: Aug 03, 2020 at 06:42 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26023805_sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `adhar_data`
--

CREATE TABLE `adhar_data` (
  `id` int(11) NOT NULL,
  `r_id` varchar(20) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `adhar` varchar(14) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adhar_data`
--

INSERT INTO `adhar_data` (`id`, `r_id`, `name`, `phone`, `adhar`, `salary`, `address`, `email`, `age`, `sex`) VALUES
(1, '1', 'Dhiraj Beri', '9824844579', '170390116004', 10000000, '35 Simandhar soc', '170390116004@saffrony.ac.in', 20, 'm'),
(15, '', 'Dharitri', '9427524959', '190390107034', 10000000, 'Atpl', '190390107034@saffrony.ac.in', 18, 'f'),
(9, '1', 'Pavan Khatri', '8160847528', '170390116049', 1200000, 'Atpl Simandhar city', '170390116049@saffrony.ac.in', 21, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `govt_data`
--

CREATE TABLE `govt_data` (
  `name` varchar(100) NOT NULL,
  `r_id` int(2) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adhar` varchar(12) NOT NULL,
  `salary` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `scheme` varchar(5000) NOT NULL,
  `scheme_type` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govt_data`
--

INSERT INTO `govt_data` (`name`, `r_id`, `phone`, `email`, `adhar`, `salary`, `address`, `age`, `sex`, `scheme`, `scheme_type`, `id`) VALUES
('Dhiraj Beri', 1, '919824844579', '170390116004@saffrony.ac.in', '170390116004', 10000000, '35 Simandhar soc', 20, 'm', 'Hon’ble Chief Minister Merit Scholarship Scheme\r\nEducation Department\r\nThe scheme launched in 2010 provides opportunities for students from weaker sections of the society to study in best and reputed Public Schools in the State and in other parts of the country. Students who have studied in a Government School from the very beginning and who pass Class V have to qualify through a screening test, after which they are sponsored by the State Government for further studies. Primarily, the Scheme was till Class XII only but from 2016, it has been extended till graduation.', 0, 21),
('Dharitri', 0, '919427524959', '190390107034@saffrony.ac.in', '190390107034', 10000000, 'Atpl', 18, 'f', 'Small Family Scheme\r\nSocial Justice & Welfare Department\r\nSmall family Scheme is a State Programme which was launched during the year 1997, which aims to bring social, economic and psychological changes amongst the women through a social security in the form of incentives. The scheme addresses the women issues from the tender age of thirteen.\r\n\r\nObjectives of the Scheme:\r\n\r\n1. Delayed age at marriage.\r\n2. Providing financial aids for small family norms.\r\n3. Promotion of health, sanitation & family planning.\r\n4. Promotion of control over her fertility.\r\n5. Providing social security during the old age.\r\n\r\nEligibility: All adolescent girls of Sikkimese origin who attain 13 years of age.\r\n\r\nDocuments Required\r\n\r\n1. Copies of Domicile/Certification of Identification.\r\n2. Copy of Birth Certificate.\r\n3. Three numbers of passport size photographs.\r\n\r\nGuidelines for Implementation of the Scheme:\r\n\r\n1. Girls of 13 years are registered under the scheme Rs. 8000/- per beneficiary is deposited in the bank for a period of 8 years, when the girl reaches 21 years of age.\r\n2. If the registered girl remains unmarried till 21 years of age she becomes eligible for first incentive of Rs. 2000/-.\r\n3. If she marries after attaining 22 years of age, She will receive Rs. 500/-.\r\n4. If she marries at 23 years of age, Rs. 1000/- is paid to her.\r\n5. First child only after 2 years of marriage makes her eligible for an incentive of 1000/-.\r\n6. A gap of 3 years between the first and the second child makes her eligible for another incentive of Rs. 1000/-.\r\n7. Rs. 8000/- will be diverted to cover a new beneficiary and the rest will remain in the bank (fixed deposit) in the name of the beneficiary till she attains fifty years of age.', 0, 52),
('Pavan Khatri', 1, '918160847528', '170390116049@saffrony.ac.in', '170390116049', 1200000, 'Atpl Simandhar city', 21, 'm', 'Beti Bachao Beti Padhao\r\nSocial Justice & Welfare Department\r\nThe Prime Minister of India launched the Beti Bachao Beti Padhao Scheme on 22nd January, 2015 at Panipat in Haryana, an initiative to address issues that affect women in the longer term and to reverse the trend of an adverse and declining Child Sex Ratio. The 100 districts have been identified on the basis of low Child Sex Ratio as per Census 2011 covering all States/UTs as a pilot with at least one district in each state. North Sikkim is identified from the State of Sikkim for implementation of the BBBP Scheme.\r\n\r\nObjectives:\r\n\r\nThe Overall Goal of the Beti Bachao, Beti Padhao (BBBP) Scheme is to celebrate the girl child and enable her education. The objectives of the Scheme are as under:\r\n\r\n1. To prevent gender biased sex selective elimination.\r\n2. To ensure survival and protection of the girl child.\r\n3. To ensure education and participation of the girl child.', 1, 51);

-- --------------------------------------------------------

--
-- Table structure for table `scheme_data`
--

CREATE TABLE `scheme_data` (
  `id` int(11) NOT NULL,
  `scheme` varchar(5000) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `scheme_type` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheme_data`
--

INSERT INTO `scheme_data` (`id`, `scheme`, `department`, `title`, `link`, `scheme_type`) VALUES
(1, 'ADIP Scheme\r\nSocial Justice &amp;amp; Welfare Department\r\nThe Scheme aims at helping the disabled persons by bringing suitable, durable, scientifically-manufactured, modern, standard aids and appliances within their reach. The estimates, according to Sample Survey conducted by NSSO in 1991, indicate that there are about 16.15 million persons with various types of disabilities in the country. Their disabilities restrict the opportunity for their economic and social growth. In addition, about 3% of the children below 14 years of age suffer from delayed development. Many of them are mentally retarded and cerebral palsied and require some aids/appliances to attain the capacity for self-care and independent living.\r\n\r\nThe main objectives of the Scheme is to assist the needy disabled persons in procuring durable, sophisticated and scientifically manufactured, modern, standard aids and appliances that can promote their physical, social and psychological rehabilitation, by reducing the effects of disabilities and enhance their economic potential. The aids and appliances supplied under the Scheme shall conform to BIS specifications to the extent possible.', 'Social Justice & Welfare Department', 'ADIP Scheme', 'https://drive.google.com/file/d/1Bcs2z7mY5nf7YskC9u1D2KXqNxIVmCoZ/view?usp=sharing', 0),
(2, 'Beti Bachao Beti Padhao\r\nSocial Justice & Welfare Department\r\nThe Prime Minister of India launched the Beti Bachao Beti Padhao Scheme on 22nd January, 2015 at Panipat in Haryana, an initiative to address issues that affect women in the longer term and to reverse the trend of an adverse and declining Child Sex Ratio. The 100 districts have been identified on the basis of low Child Sex Ratio as per Census 2011 covering all States/UTs as a pilot with at least one district in each state. North Sikkim is identified from the State of Sikkim for implementation of the BBBP Scheme.\r\n\r\nObjectives:\r\n\r\nThe Overall Goal of the Beti Bachao, Beti Padhao (BBBP) Scheme is to celebrate the girl child and enable her education. The objectives of the Scheme are as under:\r\n\r\n1. To prevent gender biased sex selective elimination.\r\n2. To ensure survival and protection of the girl child.\r\n3. To ensure education and participation of the girl child.', 'Social Justice & Welfare Department', 'Beti Bachao Beti Padhao', 'https://drive.google.com/file/d/1h5OGdnmx78er2VCE5oCTWIuWviVz-BLI/view?usp=sharing', 1),
(8, 'Accredited Social Health Activist (ASHA)\r\nHealth & Family Welfare Department\r\nUnder the National Rural health Mission (NRHM) which is one of the flagship programmes of Central Government, ASHA is a very important component envisaged with the aim to link between peripheral health system and people at grassroots level.\r\n\r\nThe Government of Sikkim, appreciating the work done by ASHA has approved the honorarium of Rs. 3000/- per month which is being given w.e.f 1st April 2011. Sikkim is the only state in the country paying honorarium to the ASHAs. This will motivate them to work even better and thus help in achieving a large number of goals concerning rural health.', 'Health & Family Welfare Department', 'Accredited Social Health Activist (ASHA)', 'https://drive.google.com/file/d/1Drv9jam437WsgQvVyX98_4QFubn2VYB4/view', 0),
(9, 'Agriculture Census\r\nAgriculture Department\r\nShort Description\r\n\r\nData collection for Operational Holding, Operational Area, Cropping Pattern, Size of Holding, and category of farmers (SC/ST/Others & Institutional).\r\n\r\nType of Assistance\r\n\r\n1. Total operational holding.\r\n2. Operated Area\r\n3. Cropping in pattern\r\n4. Size of Holding\r\n5. Category of Framer\r\n6. Area under different crop', 'Agriculture Department', 'Agriculture Census', ' https://drive.google.com/file/d/11SmPJo0c_I-PyozVTy84sMybqaKICkfk/view?usp=sharing', 0),
(10, 'Border Area Development Programme\r\nWater Resources Department\r\nObjective:\r\n \r\nThe main objective of the BADP is to meet the special developmental needs of the people living in remote and inaccessible areas situated near the international border and to saturate the border areas with the entire essential infrastructure through convergence of Central/State/ BADP/Local schemes and participatory approach. \r\n\r\nCoverage:\r\n\r\nThe BADP will continue to be a 100% centrally funded programme. The BADP would cover 362 border blocks, which are located along the international border and come under 96 border districts of 17 States viz Arunachal Pradesh, Assam, Bihar, Gujarat, Himachal Pradesh, Jammu & Kashmir, Manipur, Meghalaya, Mizoram, Nagaland, Punjab, Rajasthan, Sikkim, Tripura, Uttar Pradesh, Uttarakhand and West Bengal. Funds will be allocated to the States on the basis of (i) length of international border (ii) population of border blocks and (iii) area of border blocks with these criteria having equal weightage.  Besides, 15% weightage will be given to hilly, desert and Rann of Kutchh areas on account of difficult terrain, scarcity of resources, higher cost of construction etc.\r\n\r\nThe border block will be the spatial unit within which the State Government shall arrange to utilize the BADP funds only in those villages of the blocks, which are located ‘within  0-10 km’ from the international border. Those villages, which are located nearer to the international border will get first priority.  After saturating these villages with basic infrastructure, the next set of villages located within 0-15 km and 0-20 km need to be taken up.  If the first village in a block is located at a faraway location from the international border, the first village/hamlet in the block may be taken as “0” km distance village for drawing the priority list.', 'Water Resources Department', 'Border Area Development Programme', ' https://drive.google.com/file/d/18z6R4z8Iw-XbyIEP_o412KQSKU0W1px4/view?usp=sharing', 0),
(11, 'Chief Minister Rural Housing Scheme\r\nRural Development Department\r\nThe Scheme Chief Minister Rural Housing Scheme was aimed to bring about a qualitative improvement in the housing status of the poor by providing them a housing grant. This will result in achieving the status of a “Katcha House Free State” and reach an important milestone in the Mission: Poverty Free State.\r\n\r\nThe “Chief Minister’s Rural Housing Mission” (CMRHM) was launched in the year 2010 under the State Plan with the sole target of converting the existing 6,000 dwellings to a single storey, earthquake resistant pucca house. The State is all set to become the first katcha house free state in the country. However, such a mammoth task at hand also meant avoiding duplicity with the already existing national flagship scheme of the Ministry of Rural Development, the India Awaas Yojana (IAY). Therefore, the State Government adopted the innovative idea of convergence of the CMRHM with IAY. The two schemes have been converged since 2011-12 with the primary objective of providing a comfortable sizeable house of 605sq/ft.', 'Rural Development Department', 'Chief Minister Rural Housing Scheme', ' https://drive.google.com/file/d/1DFWD9FbsKkHy7Ou0I_d5bd48zueKdt1d/view?usp=sharing', 1),
(12, 'Chief Minister’s Free Scholarship Scheme (CMFSS)\r\nEducation Department\r\nThe State Government launched the Chief Minister’s Free Scholarship Scheme with the aim of providing free scholarship to meritorious and needy students. The scholarship is granted annually to a candidate from the BPL category or to one genuinely deserving. It is granted to a student who succeeds in securing admission to any of the top twenty universities in the world in a chosen discipline. The scholarship aims to cover course fees, hostel/accommodation charges, books, stationaries and to & from travelling charges once a year from the institute to the home country, SIDICO is the nodal agency for implementation of this scheme.', 'Education Department', 'Chief Minister’s Free Scholarship Scheme (CMFSS)', ' https://drive.google.com/file/d/1-7HZsJ78qUoyCo2i73oZrF5j3rHmRVeQ/view?usp=sharing', 0),
(13, 'Children’s Day Celebration\r\nSocial Justice & Welfare Department\r\nEvery year Children Day is celebrated universally on 14th November to commemorate the birth anniversary of Pandit Jawaharlal Nehru. The Children’s Day Celebrations are held in all four districts of the State. The participants usually comprise of panchayats, children from ICDS centres. The Children Day celebrations are also marked by organizing small workshops on various themes and issues pertaining to children. Apart from that National Girl Child day is celebrated on 24th January in the State.', 'Social Justice & Welfare Department', 'Children’s Day Celebration', ' https://drive.google.com/file/d/14xmxeKsdZZoXYhxFO6sNSRYPLgnAm9H_/view?usp=sharing', 0),
(14, 'Hon’ble Chief Minister Merit Scholarship Scheme\r\nEducation Department\r\nThe scheme launched in 2010 provides opportunities for students from weaker sections of the society to study in best and reputed Public Schools in the State and in other parts of the country. Students who have studied in a Government School from the very beginning and who pass Class V have to qualify through a screening test, after which they are sponsored by the State Government for further studies. Primarily, the Scheme was till Class XII only but from 2016, it has been extended till graduation.', 'Education Department', 'Hon’ble Chief Minister Merit Scholarship Scheme', 'https://drive.google.com/file/d/1zAhGi_BHbh0V48Yth7z_ozSkqj7Yerxk/view?usp=sharing', 0),
(15, 'Comprehensive Educational Load Scheme (CELS)\r\nEducation Department\r\nThe State Government launched the Comprehensive Educational Loan Scheme (CELS) for pursuing higher/professional studies in India and abroad with effect from July 2007, SIDICO is the nodal agency for implementation of this scheme and has witnessed commendable success. The students are undergoing courses in engineering, medicine, agriculture, horticulture, hospitality management, commercial pilot, post graduate courses etc.', 'Education Department', 'Comprehensive Educational Load Scheme (CELS)', 'https://drive.google.com/file/d/1C6g6zK0TKmENCkVaUWnkYFBsvuEwYgDB/view?usp=sharing', 0),
(16, 'Mukhya Mantri Awas Yojana\r\nRural Development Department\r\nIn the year 2007, the government felt that only distribution of GCI sheets and house upgradation to the rural people who are poorest of the poor is not sufficient and as such introduced a supplementary scheme – “Mukhya mantra Awaas Yojana (MMAY)” under the housing sector in which a modern house of bricks with CGI roof, toilet, electricity is constructed and handed over to the beneficiaries. Till date 1,188 poorest of the poor beneficiaries have benefitted with Mukhya Mantri Awaas Yojana (MMAY).\r\n\r\nIn order to achieve katcha house free status, the need for defining the term katcha house and strategy to convert them into Pucca House was framed, which resulted in birth of Chief Minister’s Rural Housing Scheme in the year 2011.', 'Rural Development Department', 'Mukhya Mantri Awas Yojana', 'https://drive.google.com/file/d/13R2jJqYHcZRK0Gokp-TlgY4V5Sveaj4F/view?usp=sharing', 0),
(17, 'NLCPR (Non Lapsable Central Pool of Resources)\r\nPower Department\r\nNLCPR (Non Lapsable Central Pool of Resources)\r\n\r\n1. NLCPR Work has enabled us to provide quality power even at far flung areas of Sikkim.\r\n\r\n2. It has enabled us in reduction of AT & C (Aggregate Technical & Commercial) losses.\r\n\r\n3. It has given fillip in establishment of industries and tourism.\r\n\r\n4. It has also increased billing efficiency.', 'Power Department', 'NLCPR (Non Lapsable Central Pool of Resources)', ' https://drive.google.com/file/d/1jH1pj1j7sE3aprf0butVoOS1HrK2DPpu/view?usp=sharing', 0),
(18, 'Priority Households (PHH)\r\nFood & Civil Supplies Department\r\nThe criteria for selection of PHH beneficiaries were laid down in the Food Security Rules, 2014 as under:  \r\nAll economically weaker households shall be included under Priority Households (PHH) subject to the following criteria:\r\n\r\nThe households shall not have any member in the regular service of State Government/Central Government/Public Sector Undertaking/Army etc.\r\nThe households shall not have any retired government servant as member of their family;\r\nThe households shall not have any member in the work-charge service in State Government/Central Government/Public Sector undertaking etc.\r\nThe households shall not own a taxi or private vehicle in the name of any of the family member;\r\nThe household shall not own Pucca House (CMRH & REDRH houses are excluded)\r\nThe households should not be earning house rent more than Rs. 10000 a month from their dwelling house;\r\nThe household shall not have any member enlisted as government contractor in class I, IA, 2 & 3 categories with sound socio-economic background;\r\nThe household shall not possess more than 2.5 acres of cultivable land or 5 acres of barren land;\r\nThe household shall not have agriculture/floriculture/animal husbandry related commercial ventures earning more than Rs. 1.20 lakhs per annum or any other source;\r\nAll selected households shall possess either of the following documents:\r\nSikkim Subject Certificate (SSC)\r\nCertificate of Identification(COI)\r\nVoter ID Card issued by the Election Department;\r\nRation Card surrender certificate issued by the Food & Civil Supplies Department of the respective State Government, in case the applicant beneficiary is from outside the State.', 'Food & Civil Supplies Department', 'Priority Households (PHH)', ' https://drive.google.com/file/d/1FtBxrQNUe9H2Sq2HxJ_MAgKn-gVxVSOA/view?usp=sharing', 1),
(19, 'Rural Housing Scheme of Government of Sikkim\r\nRural Development Department\r\nUnder the Rural Housing Scheme of the State Government, economically backward rural households are being provided 30 numbers of GCI sheets and a grant of Rs.15,000/- as house upgradation subsidy in order to take up immediate repair of their houses. Till date 51,255 beneficiaries were benefitted under this scheme.', 'Rural Development Department', 'Rural Housing Scheme of Government of Sikkim', 'https://drive.google.com/file/d/1j6swuPKqC6SeDHmjtRFxMa2DqVW6xA9K/view?usp=sharing', 1),
(20, 'Small Family Scheme\r\nSocial Justice & Welfare Department\r\nSmall family Scheme is a State Programme which was launched during the year 1997, which aims to bring social, economic and psychological changes amongst the women through a social security in the form of incentives. The scheme addresses the women issues from the tender age of thirteen.\r\n\r\nObjectives of the Scheme:\r\n\r\n1. Delayed age at marriage.\r\n2. Providing financial aids for small family norms.\r\n3. Promotion of health, sanitation & family planning.\r\n4. Promotion of control over her fertility.\r\n5. Providing social security during the old age.\r\n\r\nEligibility: All adolescent girls of Sikkimese origin who attain 13 years of age.\r\n\r\nDocuments Required\r\n\r\n1. Copies of Domicile/Certification of Identification.\r\n2. Copy of Birth Certificate.\r\n3. Three numbers of passport size photographs.\r\n\r\nGuidelines for Implementation of the Scheme:\r\n\r\n1. Girls of 13 years are registered under the scheme Rs. 8000/- per beneficiary is deposited in the bank for a period of 8 years, when the girl reaches 21 years of age.\r\n2. If the registered girl remains unmarried till 21 years of age she becomes eligible for first incentive of Rs. 2000/-.\r\n3. If she marries after attaining 22 years of age, She will receive Rs. 500/-.\r\n4. If she marries at 23 years of age, Rs. 1000/- is paid to her.\r\n5. First child only after 2 years of marriage makes her eligible for an incentive of 1000/-.\r\n6. A gap of 3 years between the first and the second child makes her eligible for another incentive of Rs. 1000/-.\r\n7. Rs. 8000/- will be diverted to cover a new beneficiary and the rest will remain in the bank (fixed deposit) in the name of the beneficiary till she attains fifty years of age.', 'Social Justice & Welfare Department', 'Small Family Scheme', 'https://drive.google.com/file/d/1AZtam25jvVqiPawdHDFmF3E64gLEmncf/view?usp=sharing', 1),
(21, 'Subsistence Allowance\r\nSocial Justice & Welfare Department\r\nThe State Government of Sikkim through the Department of Social Justice, Empowerment & Welfare provides a sum of rupees 1000/- per month(from July 2017 onwards) as SUBSISTENCE ALLOWANCE to every local physically challenged person whose degree of disability has been assessed to be 40% and above.\r\n\r\nCriteria for the Scheme:\r\n\r\n1. Applicant should be local having Sikkim Subject Certificate or Certificate of Identification.\r\n2. Degree of disability as assessed by the Medical Specialist concerned should be 40% and above.\r\n3. Applicant should belong to Below Poverty Line (BPL) family.\r\n\r\nDocuments Required:\r\n\r\n1. Disability Certificate.\r\n2. Copy of SSC/COI.\r\n3. Income Certificate.\r\n4. Passport size Photograph (3 nos.)\r\n\r\nAn application Form is available at the respective Office of the BDOs and, the office of the Social Welfare Officers and also from at Social Welfare Division at Head Quarter, Gangtok', 'Social Justice & Welfare Department', 'Subsistence Allowance', ' https://drive.google.com/file/d/1GFu1B8xkz8Up36_xS0oaWtAaBvCxl-bd/view?usp=sharing', 0),
(22, 'Scheme for Transgender\r\nSocial Justice & Welfare Department\r\nThe Government has introduced the scheme vide Notification No: 5/SJE&WD dated 27.08.2013 to the Transgender (third Gender) for economic empowerment to ensure their financial security and to come out from their hidden life and give an opportunity to them to take part in the nation building and development activities through securing their life. The monthly allowance of Rs. 2000/= from 0-6 years with 100% sponsorship for the education till graduation level is provided. Thereafter, monthly allowance of Rs. 500/- shall be provided if the incumbent is remained unemployed.', 'Social Justice & Welfare Department', 'Scheme for Transgender', 'https://drive.google.com/file/d/11_NWvL53_6NbKXVFZcxClThNAAP5ANxz/view?usp=sharing', 0),
(23, 'The Mukhya Mantri Sishu Suraksha Yojana Avam Sutkeri Shayog Yojana\r\nHealth & Family Welfare Department\r\nThis is another programme unique to Sikkim which again happens to be the brain child of Hon’ble Chief Minister. The Mukhya Mantri Sishu Suraksha Yojana Avam Sutkeri Shayog Yojana has been specifically designed to ensure that every pregnant women of BPL family during delivery receives a cash assistance of Rs.3000/- to enable her to access better health care, good nutrition and also take good care of the new born.\r\n\r\nFurther realizing the importance of correction of gender bias the second child of the BPL mother if it happens to be a female child, the mother will again be entitled for another Rs.3000/- which would be given immediately after the delivery. In this programme a new born first child as well as new born second girl child would also be given an assistance of Rs.500 per month which will continue till the child attains age of 6 years. This is done with the sole idea of providing better nutrition, better health and better overall development of the new born child. The scheme was launched on 15th August 2011 but came into effect 1st September, 2011.', 'Health & Family Welfare Department', 'The Mukhya Mantri Sishu Suraksha Yojana Avam\r\n\r\nSutkeri Shayog Yojana', 'https://drive.google.com/file/d/1TSNtqMu6rqCvt6sATCqAAqTzLF1YyduH/view?usp=sharing', 1),
(24, 'Unique Identification Scheme\r\nDirectorate Of Economics, Statistics & Monitoring And Evaluation (D.E.S.M.E)\r\nUnique Identification Scheme\r\n \r\nUnique Identification Authority of India (UIDAI) has been setup by the Govt. of India with the mandate to issue unique identification number or Aadhaar to all residents in the country.  UIDAI proposes to create a platform to first collect the identity details like demography, and then perform authentication that can be used by several government and commercial service providers. In order to ensure that each identity is unique and unduplicated, biometric details like, finger prints of all ten fingers of the hand, iris and photograph of each and every person will be captured.   The UID has immense possibilities through generation of unique number which the government of Sikkim proposes to use in all identity based schemes and other business processes, development of an effective beneficiary management system, ensure delivery of schemes to the poor and rural people, financial inclusion of the rural people, and build a robust data base for  integrated management system and effective monitoring and evaluation.\r\n \r\nThe main objective behind the UID project are as under:\r\n\r\n1. To give unique identity number to all residents.\r\n2. To ensure financial inclusion of the poor/rural people through UEBA (UID enabled Bank accounts).\r\n3. To  create a robust benefit/delivery mechanism for ensuring last mile delivery.\r\n4. The UID number is proposed to be incorporated in all identity based schemes and process like Ration Card, Bank Account, Passport and flagship projects of government of India.\r\n5. Development of a database for effective monitoring and evaluation.\r\n \r\nOne of the objectives of UID programme is to implement Direct Benefit Transfer, an anti-poverty program which aims to transfer subsidies directly to the beneficiaries. Direct Benefit Transfer is intended to bring transparency and terminate pilferage. Therefore, all identity based schemes is proposed to be implemented through UID numbers. Hence, a citizen must have Aadhaar for availing benefits. In addition to this many documents like passport, Ration Card, etc and banking services now require Aadhaar.\r\nIn Sikkim, the UID programme started in 2010-11 and DESM&E has been declared as the Nodal department.\r\n\r\nPermanent Enrolment Center (PEC) has been established by the department in all the four districts. The location of the PECs is given below:\r\n\r\n1. East District: DESM&E, Church Road, Gangtok.\r\n2. West District: District Statistics Office, Kyongsa, Gyalshing\r\n3. North District: District Statistics Office, Pentok, Mangan\r\n4. South District: District Statistics Office, District Administrative Center, Namchi\r\n', 'Directorate Of Economics, Statistics & Monitoring And Evaluation\r\n\r\n(D.E.S.M.E)', 'Unique Identification Scheme', 'https://drive.google.com/file/d/1yE4vLvn_Z39hzGoQEknlnApAynRTCRj6/view?usp=sharing', 0),
(26, 'Priority Households (PHH)\r\nFood & Civil Supplies Department\r\nThe criteria for selection of PHH beneficiaries were laid down in the Food Security Rules, 2014 as under:  \r\nAll economically weaker households shall be included under Priority Households (PHH) subject to the following criteria:\r\n\r\nThe households shall not have any member in the regular service of State Government/Central Government/Public Sector Undertaking/Army etc.\r\nThe households shall not have any retired government servant as member of their family;\r\nThe households shall not have any member in the work-charge service in State Government/Central Government/Public Sector undertaking etc.\r\nThe households shall not own a taxi or private vehicle in the name of any of the family member;\r\nThe household shall not own Pucca House (CMRH & REDRH houses are excluded)\r\nThe households should not be earning house rent more than Rs. 10000 a month from their dwelling house;\r\nThe household shall not have any member enlisted as government contractor in class I, IA, 2 & 3 categories with sound socio-economic background;\r\nThe household shall not possess more than 2.5 acres of cultivable land or 5 acres of barren land;\r\nThe household shall not have agriculture/floriculture/animal husbandry related commercial ventures earning more than Rs. 1.20 lakhs per annum or any other source;\r\nAll selected households shall possess either of the following documents:\r\nSikkim Subject Certificate (SSC)\r\nCertificate of Identification(COI)\r\nVoter ID Card issued by the Election Department;\r\nRation Card surrender certificate issued by the Food & Civil Supplies Department of the respective State Government, in case the applicant beneficiary is from outside the State.', 'Food & Civil Supplies Department', 'Priority Households (PHH)', 'https://drive.google.com/file/d/1FtBxrQNUe9H2Sq2HxJ_MAgKn-gVxVSOA/view?usp=sharing', 1),
(27, 'Livestock Insurance Scheme\r\nAnimal Husbandry & Veterinary Services Department\r\nLivestock Insurance Scheme\r\n \r\nThe Department initiated a new and innovative programme under the Common Minimum Programme of the Government of India where cows and buffalo are insured and the farmers are benefitted during the time of difficulties when animals succumb to disease/ accident/ natural calamities. The insurance of Livestock is covered by paying a 50% premium share from the farmers and 50 % by the Department. Till date a total of 13637 of cattle and buffalos are covered under this scheme and now 2000 farmers have benefitted from this scheme. A total of almost 20% of the breedable cattle is covered under this scheme.', 'Animal Husbandry & Veterinary Services Department', 'Livestock Insurance Scheme', 'https://drive.google.com/file/d/1K-IRjeFbsdU2TvyR8JbmbI7oc1SSKwuG/view?usp=sharing', 0),
(28, 'Indira Gandhi National Disability Pension Scheme\r\nSocial Justice & Welfare Department\r\nThe Indira Gandhi National Disability Pension Scheme is provided to differently abled persons in the age group of 18 to 64 years, belonging to a household of Below Poverty Line category with severe or multiple disability as defined in â€˜Persons with Disabilities Act, 1995 (PWD Act 1995)â€™ and the â€˜National Trust for the Welfare of Persons with Autism, Cerebral Palsy, Mental Retardation and Multiple Disabilities Act, 1999 (National Trust Act 1999)â€™. The Ministry of Rural Development, Government of India provides a sum of Rs. 300/- per month. In addition to this the State Government too grants an amount of Rs. 1200/- per month, thus a beneficiary receives an amount of Rs. 1500/- per month from July 2017 onwards.', 'Social Justice & Welfare Department', 'Indira Gandhi National Disability Pension Scheme', 'https://drive.google.com/file/d/19J3RyuD7-FbKo5bj22vc5GuAuoHbEXKy/view?usp=sharing', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adhar_data`
--
ALTER TABLE `adhar_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govt_data`
--
ALTER TABLE `govt_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme_data`
--
ALTER TABLE `scheme_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adhar_data`
--
ALTER TABLE `adhar_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `govt_data`
--
ALTER TABLE `govt_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `scheme_data`
--
ALTER TABLE `scheme_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

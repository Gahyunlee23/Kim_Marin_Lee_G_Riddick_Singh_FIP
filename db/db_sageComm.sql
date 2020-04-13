-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 13, 2020 at 01:09 AM
-- Server version: 10.3.21-MariaDB-1:10.3.21+maria~bionic
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sageComm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `login_fname` varchar(30) NOT NULL,
  `login_name` varchar(30) NOT NULL,
  `login_pass` varchar(20) NOT NULL,
  `login_email` varchar(150) NOT NULL,
  `login_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_fname`, `login_name`, `login_pass`, `login_email`, `login_date`) VALUES
(1, 'admin', 'dd', '1234', 'fip@test.com\r\n', '2020-04-13 01:06:00'),
(2, 'fake', 'hh', '1234', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

CREATE TABLE `tbl_story` (
  `story_id` int(11) NOT NULL,
  `story_title` varchar(50) NOT NULL,
  `story_img` varchar(100) NOT NULL,
  `story_explain` varchar(200) NOT NULL,
  `story_description` text NOT NULL,
  `story_video` varchar(50) NOT NULL,
  `story_background` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_story`
--

INSERT INTO `tbl_story` (`story_id`, `story_title`, `story_img`, `story_explain`, `story_description`, `story_video`, `story_background`) VALUES
(1, 'FACING STIGMA TOGETHER', 'stories-1-1.jpg', '“When I was still in primary school, one of my classmates was HIV-positive,” says Collins, a 16-year-old living in Homabay, Kenya.', '“When I was still in primary school, one of my classmates was HIV-positive,” says Collins, a 16-year-old living in Homabay, Kenya. “Since everyone knew he was HIV-positive, people were talking about him. He felt stigma [because of his HIV status] and he rejected his treatment. He did not want to take the drugs.” “Eventually he died,” continues Collins grimly, “…last year.”<br> Collins, who is also living with HIV, keeps his own status secret. He does not want to face the same rejection. The one place at which Collins can talk openly about HIV and other hardships is with his peers at the Kandiege Health Center (supported by the Elizabeth Glaser Pediatric AIDS Foundation), where he picks up his medication. Once a week, Collins attends the Kandiege Ariel Club, a psychosocial support group with about two-dozen other adolescents living with HIV.<br> Together, they learn about HIV—what it is, how to treat it, how to live with it. The group gives them space to share their experiences and emotions with peers who fully understand many of their difficulties and triumphs. “I came to know about my HIV status from my grandmother,” says Collins. “When I was about 2 years old, my mother died. Then eventually, I fell sick. When I was about 5 years old, I was diagnosed as HIV-positive here at Kandiege. I continued to live with my grandmother until I reached Class 7 [age 12].<br> “Then my grandmother died, and I lived with my uncle and his wife. They are farmers—they plant crops like maize, beans, and ground nuts. They have tried their best, but they still have not reached good conditions [financially], so I have been sent home for lack of school fees. I have been away from school for some time.” Collins would like to go to college and eventually become an electrical engineer, but as an orphan living with HIV, he is feeling dejected at the moment. His friendships at the Ariel Club are vital. Along with the stigma of living with HIV,<br> other group members know what it is like to grow up without parents and are also experiencing financial insecurity.<br> Grace is a 15-year-old who was infected with HIV at the age of 8 when she was raped. “I suffered a lot,” says Grace. “I was afraid. I just kept quiet.” Grace secretly bore the trauma of her sexual assault until she was finally diagnosed with HIV at the age of 12 and received counseling at Kandiege. Support at home is limited. Grace lives with her grandmother and four younger siblings. Her father died of pneumonia when she was a little girl and her mother left shortly after “for greener pastures” in Nairobi. “My grandmother is very old. She just stays at home. I am the one who—after school—I look out for the family.<br> Grandmother is not able to sustain our lives, so I fetch firewood and sell it to buy food. I am in school, but for the past two weeks I was sent home for lack of school fees.” Grace is determined to make it back to school. “I want to be a journalist,” she says, “so that I can teach other girls through the media how to take care of themselves.”', 'http://player.vimeo.com/video/201308564', 'header-story1'),
(2, 'LIVING AS AN HIV-POSITIVE TEEN', 'stories-2-1.jpg', '“I found out I was HIV positive when I was 7 years old,” says Ashley Rose Murphy, EGPAF Ambassador.', '“I found out I was HIV positive when I was 7 years old,” says Ashley Rose Murphy, EGPAF Ambassador. “When my parents told me, they sat me down and they said, ‘Ashley, the reason why you take all of these medications and why you go to all these doctor appointments is because you have a virus called HIV. Her parents and doctors told her she shouldn’t tell anybody, but Murphy didn’t understand why. “I asked, ‘Why do I need to keep it a secret? I didn’t do anything wrong.’”<br> Since then, Murphy has spoken to thousands of people, hoping to help educate others and reduce the stigma around HIV. Murphy says the widespread fear of HIV stems from a lack of knowledge, which is why she speaks so openly about it. She speaks at school and conferences to educate both kids and adults about the virus so they understand what it is and what it’s like to live with it.<br> She started speaking at medical conferences in Canada (her home country) when she was 10 along with other kids she had grown up with in the medical system in Toronto. She attended a support group for children with HIV, and they occasionally went to speak with groups of medical professionals. \"The other kids wouldn\'t speak if there was media,\" Murphy recalls, “but I didn’t really care.\" Her mother tells SELF it was hard at first to see her daughter exposed like that, but Ashley was always comfortable.<br>  “I’ve always loved performing and singing, so being in front of people doesn’t scare me at all,” Murphy says. Last year, she went to speak to her brother’s kindergarten class about HIV/AIDS, per the teacher’s request. “I talked to the first group of kids and then after I was done speaking, I got confronted by the principal and he said, ‘Can you not use the word HIV in your next presentation?’ That really hurt,” Murphy says.<br>  “It’s crazy because that’s discrimination right there. I was asked to speak at the school, and here I am facing it.” It\'s kind of tough to raise awareness and have an honest conversation about something like HIV when you\'re not allowed to even say the word. Murphy doesn’t announce her HIV status to the grocery store cashier or to new acquaintances out of the blue like she did as a kid, but she does stand in front of crowds and openly talk about having HIV.<br> Her status is right there in her social media bios. She’s upfront and honest about it with friends and classmates at York University in Toronto, where she studies theater. “It’s not really a secret. Pretty much with anyone I meet I’m really open about it now,” she says. Murphy credits growing up in a family of 10 kids, all with differing special needs, and extremely supportive parents, for how she’s been able to live without shame or fear. “They’ve always taught us the importance of being yourself and loving yourself and being comfortable with who you are and to not be ashamed.<br>  And so I kind of took their sayings and ran with it.” She hopes that by using her voice and living as an example, she can help the world be a more understanding place for those who are afraid to speak about having HIV, so they can let go of the shame and feel comfortable in their own skin. ', 'https://www.youtube.com/embed/p1GCffwYjM8', 'header-story2'),
(3, 'IT DIDN\'T SEEM LIKE A BIG DEAL', 'stories-3-1.jpg', 'I am 25. My sister is the only family I have left. Our parents died when we were still very young.', ' I am 25. My sister is the only family I have left. Our parents died when we were still very young. I found out some time later that I was born with HIV and that I would have to live with this virus for the rest of my life. It didn’t seem like a big deal when I first found out. My uncle took me to the hospital and I started taking antiretroviral treatment - that was a pat on the back for him.<br> As I was growing up so my fear of living with HIV grew. I was grieving a lot and began to live in denial. I used to ask God why? I stigmatised myself. I tried committing suicide several times in high school. I used to stockpile my medication and then throw it down the toilet on my clinic day. I was separated from my sister so I faced all this alone. Later I developed resistance to the first-line drug combination I’d been taking.<>br My viral load was too high and I was sick most of the time. So my doctor recommended that I move to second-line treatment. That was very scary because I thought that it was almost the last option in the HIV world. I was heartbroken but faced the reality of switching medication. I was under other pressures at home and at school but my biggest fear was failing my new treatment. I was also worried about adjusting to the physical side effects of the new drug combination.<>br After a few counselling sessions I switched to second-line treatment, knowing well the side effects that might come with it but also knowing what to do if and when that happened. This journey is tough and you need to have support. My friends really went out of their way to help me adjust to my new medication.<br> Today HIV is not a big deal to me. I can take my medicine in public and I am healthy. If you fight stigma and denial within yourself first it\'s very easy to live a positive life. ', 'https://www.youtube.com/embed/yiU8nQ_-q9s', 'header-story3'),
(8, '테스트', 'dd4d10949f701fb84d395ed862c7ab06.jpg', '테스트 중입니다테스', '테스트 테스트', '테스트 중입니다', '아아 테스트');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_story`
--
ALTER TABLE `tbl_story`
  ADD PRIMARY KEY (`story_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_story`
--
ALTER TABLE `tbl_story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

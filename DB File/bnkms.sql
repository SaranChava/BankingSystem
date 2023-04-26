SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- This table stores data about ATM machines

CREATE TABLE `atm` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int(10) NOT NULL,
  `atm_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
INSERT INTO `atm` (`id`, `cust_name`, `account_no`, `atm_status`) VALUES
(1, 'Samp', 989898, 'ACTIVE');




CREATE TABLE `bank_customers` (
  `Id` int(100) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(15) DEFAULT NULL,
  `Customer_Photo` longblob,
  `Photo_name` varchar(500) DEFAULT NULL,
  `Customer_ID` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `Landline_no` varchar(10) NOT NULL,
  `Home_Addr` varchar(100) NOT NULL,
  `Office_Addr` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Pin_code` varchar(255) NOT NULL,
  `Account_no` varchar(20) DEFAULT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `IFSC_Code` varchar(50) DEFAULT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `CITIZENSHIP` varchar(50) DEFAULT NULL,
  `Current_Balance` float(100,2) DEFAULT NULL,
  `LastTransaction` int(20) DEFAULT '0',
  `Mobile_no` varchar(20) DEFAULT NULL,
  `Email_ID` varchar(50) DEFAULT 'Nil',
  `Debit_Card_No` varchar(50) DEFAULT NULL,
  `Debit_Card_Pin` int(4) DEFAULT NULL,
  `CVV` int(3) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `Area_Loc` varchar(255) DEFAULT NULL,
  `Nominee_name` varchar(255) DEFAULT NULL,
  `Nominee_ac_no` varchar(255) DEFAULT NULL,
  `Last_Login` varchar(50) DEFAULT NULL,
  `Ac_Opening_Date` varchar(255) DEFAULT NULL,
  `Account_Status` varchar(10) NOT NULL,
  `Account_type` varchar(20) NOT NULL
);


INSERT INTO `bank_customers` (`Id`, `Username`, `Password`, `Customer_Photo`, `Photo_name`, `Customer_ID`, `Gender`, `Landline_no`, `Home_Addr`, `Office_Addr`, `Country`, `State`, `City`, `Pin_code`, `Account_no`, `Branch`, `IFSC_Code`, `SSN`, `CITIZENSHIP`, `Current_Balance`, `LastTransaction`, `Mobile_no`, `Email_ID`, `Debit_Card_No`, `Debit_Card_Pin`, `CVV`, `DOB`, `Area_Loc`, `Nominee_name`, `Nominee_ac_no`, `Last_Login`, `Ac_Opening_Date`, `Account_Status`, `Account_type`) VALUES
(1, 'Rahul Raj', 'hjjhjh', NULL, NULL, '1010112', 'Male', '1478545555', '12006 Graduate lane', 'Uptown 9th', 'US', 'Koha', 'Koha', '90090', '1011071010112', 'Demo Branch', '1011', '1478569000', '178965412300', 3650.00, 0, '7415896650', 'rkattess@gmail.com', '421351746137', 6897, NULL, '1995-02-15', 'Demo', 'none', 'none', '27/07/21 02:45:15 PM', '22/07/21 10:07:46 PM', 'ACTIVE', 'Saving'),
(2, 'Varsha Ganguri', 'dvwtdv', NULL, NULL, '1011046', 'Male', '2145896666', '4126 Broadway Street', '2588 Mill Street', 'US', 'California', 'Fresno', '88660', '1011801011046', 'Demo Branch ', '1011', '24580001', '145896587450', 7090.00, 0, '7850001250', 'varsgs@gmail.com', '421360993922', 2957, NULL, '1990-03-15', 'CLF', 'none', 'none', '27/07/21 02:41:02 PM', '26/07/21 10:34:49 PM', 'ACTIVE', 'Saving'),
(3, 'Krishna Ronaldo', 'sddssds', NULL, NULL, '1011426', 'Female', '4520001250', '996 Quincy Street', '4196 Boggess Street', 'US', 'California', 'Los Angeles', '99660', '1011411011426', 'Demo Branch ', '1011', '14701400', '256900000012', 1962.00, 0, '7012500010', 'kronald@gmail.com', '421317135335', 2587, NULL, '1995-09-17', 'CLF', 'none', 'none', '26/07/21 11:56:16 PM', '26/07/21 11:24:10 PM', 'ACTIVE', 'Saving'),
(6, 'Sava Saran', 'dsdssdsd', NULL, NULL, '1011742', 'Female', '2140002150', '2402 Lake Floyd Circle', '4390 Circle Drive', 'US', 'Washington', 'Seattle', '220069', '1011751011742', 'Demo Branch ', '1011', '30140250', '201477775010', 111.00, 0, '7014569690', 'sssarn@gmail.com', '421353616626', 7345, NULL, '1990-10-10', 'WHT', 'none', 'none', '27/07/21 03:07:21 PM', '27/07/21 02:55:25 PM', 'ACTIVE', 'Saving'),
(4, 'Noob Nikhila', 'guuyu', NULL, NULL, '1011439', 'Male', '2145890000', '4040 Russell Street', '1380 Rocky Road', 'US', 'Texas', 'Texas City', '12126', '1011951011439', 'Demo Branch ', '1011', '12350000', '102589000012', 5274.00, 0, '7025690001', 'trusso@gmail.com', '421393986422', 4483, NULL, '1992-01-01', 'TXC', 'none', 'none', '27/07/21 03:52:29 PM', '26/07/21 11:52:58 PM', 'ACTIVE', 'Saving'),
(5, 'Turuun sss', 'ieiieeieie', NULL, NULL, '1011768', 'Female', '2585200012', '3767 Amethyst Drive', '313 Harper Street', 'US', 'Florida', 'Miami', '66990', '1011921011768', 'Demo Branch ', '1011', '01490090', '301025800012', 215.00, 0, '7016002001', 'dghbghf@gmail.com', '421323539393', 2473, NULL, '1996-09-25', 'FLR', 'none', 'none', '27/07/21 03:51:34 PM', '27/07/21 10:44:50 AM', 'ACTIVE', 'Saving'),
(7, 'Divya Rav', 'gshsshshs', NULL, NULL, '1011722', 'Others', '2580000021', '1769 Courtney Rd', '1769 Courtney Rd', 'US', 'California', 'San Diego', '96690', '1011591011722', 'Demo Branch ', '1011', '31450002', '102000002500', 210.00, 0, '7014780000', 'dfdfdfdf@gmail.com', '421395174682', 4924, NULL, '2019-02-20', 'CLF', 'none', 'none', '27/07/21 03:50:56 PM', '27/07/21 03:20:32 PM', 'ACTIVE', 'Saving'),
(8, 'Edward Weese', 'bfbfbfb', NULL, NULL, '1011950', 'Male', '2147850010', '909 Reaves St', '6969 Red Fox Rd', 'US', 'Florida', 'Orlando', '66001', '1011801011950', 'Demo Branch ', '1011', '08996001', '120000256980', 5738.00, 0, '9009000010', 'edward@gmail.com', '421319983246', 9454, NULL, '1992-12-12', 'FLR', 'none', 'none', '27/07/21 03:52:02 PM', '27/07/21 03:42:57 PM', 'ACTIVE', 'Saving'),
(9, 'JohnDoe', 'password123', NULL, NULL, '123456', 'Male', '0123456789', '123 Main Street', '456 Business Boulevard', 'USA', 'California', 'Los Angeles', '12345', '987654321', 'Bank of America', 'BOFAUS6S', '123-45-6789', 'American', 5000, 22, '9876542210', 'johndoe@email.com', '1234567890123456', 4322, NULL, '1990-01-01', 'Downtown', 'Jane Doe', '123456789', '2023/03/26 12:00:00', '27/07/21 03:50:56 PM', 'Active', 'Savings'),
(10, 'JaneDoe', 'password456', NULL, NULL, '234567', 'Female', '0987654321', '456 Main Street', '789 Business Boulevard', 'USA', 'California', 'San Francisco', '54321', '123456789', 'Wells Fargo', 'WFBIUS6S', '234-56-7890', 'American', 10000, 62, '9096543210', 'janedoe@email.com', '4321567890123456', 7873, NULL, '1995-05-15', 'Uptown', 'John Doe', '987654321', '2023/04/16 12:00:00', '27/03/21 03:50:56 PM', 'ACTIVE', 'Checking'),
(11, 'MarkSmith', 'password789', NULL, NULL, '345678', 'Male', '0123456789', '789 Main Street', '123 Business Boulevard', 'USA', 'New York', 'New York City', '67890', '456789012', 'Chase', 'CHASUS33', '345-67-8901', 'American', 15000, 1000, '9806223210', 'marksmith@email.com', '5678901234561234', 9009, NULL, '1985-10-10', 'Midtown', 'Mary Smith', '345678901', '2023/04/27 12:00:00', '27/07/22 03:50:56 PM', 'ACTIVE', 'Savings');

-- This table contains information about the bank staff.


CREATE TABLE `bank_staff` (
  `Id` int(255) NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL,
  `staff_id` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Mobile_no` varchar(50) DEFAULT NULL,
  `Email_id` varchar(50) DEFAULT 'Nill',
  `Gender` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `DOB` varchar(50) DEFAULT NULL,
  `CITIZENSHIP` varchar(50) DEFAULT NULL,
  `SSN` varchar(50) DEFAULT NULL,
  `Home_addr` varchar(50) DEFAULT NULL,
  `Last_login` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `bank_staff` (`Id`, `staff_name`, `staff_id`, `Password`, `Mobile_no`, `Email_id`, `Gender`, `Department`, `DOB`, `CITIZENSHIP`, `SSN`, `Home_addr`, `Last_login`) VALUES
(1, 'Sean Smith', '210001', 'password', '7412225696', 'ssmith@gmail.com', 'Male', 'Revenue', '10121995', '379145632000', '14569855', '445 Woodlawn Drive', '27/07/21 03:53:18 PM');


CREATE TABLE `beneficiary_1010112` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;



INSERT INTO `beneficiary_1010112` (`id`, `Beneficiary_name`, `Beneficiary_ac_no`, `IFSC_code`, `Account_type`, `Status`, `Date_added`) VALUES
(2, 'Varsha Ganguri', '1011801011046', '1011', 'Saving', 'ACTIVE', '26/07/21 11:02:55 PM'),
(3, 'Noob Nikhila', '1011951011439', '1011', 'Saving', 'ACTIVE', '27/07/21 02:45:39 PM');



CREATE TABLE `beneficiary_1011046` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;



INSERT INTO `beneficiary_1011046` (`id`, `Beneficiary_name`, `Beneficiary_ac_no`, `IFSC_code`, `Account_type`, `Status`, `Date_added`) VALUES
(1, 'Noob Nikhila', '1011951011439', '1011', 'Saving', 'ACTIVE', '27/07/21 10:32:58 AM');



CREATE TABLE `beneficiary_1011426` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `beneficiary_1011426` (`id`, `Beneficiary_name`, `Beneficiary_ac_no`, `IFSC_code`, `Account_type`, `Status`, `Date_added`) VALUES
(1, 'Noob Nikhila', '1011951011439', '1011', 'Saving', 'ACTIVE', '26/07/21 11:56:42 PM');



CREATE TABLE `beneficiary_1011439` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `beneficiary_1011439` (`id`, `Beneficiary_name`, `Beneficiary_ac_no`, `IFSC_code`, `Account_type`, `Status`, `Date_added`) VALUES
(1, 'Turuun sss', '1011921011768', '1011', 'Saving', 'ACTIVE', '27/07/21 02:32:43 PM'),
(2, 'Sava Saran', '1011751011742', '1011', 'Saving', 'ACTIVE', '27/07/21 02:59:41 PM'),
(3, 'Krishna Ronaldo', '1011411011426', '1011', 'Saving', 'ACTIVE', '27/07/21 03:12:14 PM'),
(4, 'Divya Rav', '1011591011722', '1011', 'Saving', 'ACTIVE', '27/07/21 03:23:54 PM');



CREATE TABLE `beneficiary_1011722` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `beneficiary_1011742` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `beneficiary_1011742` (`id`, `Beneficiary_name`, `Beneficiary_ac_no`, `IFSC_code`, `Account_type`, `Status`, `Date_added`) VALUES
(1, 'Noob Nikhila', '1011951011439', '1011', 'Saving', 'ACTIVE', '27/07/21 03:02:08 PM');



CREATE TABLE `beneficiary_1011768` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `beneficiary_1011950` (
  `id` int(255) NOT NULL,
  `Beneficiary_name` varchar(255) DEFAULT NULL,
  `Beneficiary_ac_no` varchar(255) DEFAULT NULL,
  `IFSC_code` varchar(255) DEFAULT NULL,
  `Account_type` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Date_added` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `beneficiary_1011950` (`id`, `Beneficiary_name`, `Beneficiary_ac_no`, `IFSC_code`, `Account_type`, `Status`, `Date_added`) VALUES
(1, 'Turuun sss', '1011921011768', '1011', 'Saving', 'ACTIVE', '27/07/21 03:48:44 PM'),
(2, 'Divya Rav', '1011591011722', '1011', 'Saving', 'ACTIVE', '27/07/21 03:50:00 PM');



CREATE TABLE `cheque_book` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int(10) NOT NULL,
  `cheque_book_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `cheque_book` (`id`, `cust_name`, `account_no`, `cheque_book_status`) VALUES
(8, 'Thom Yorke', 960010101, 'PENDING');



CREATE TABLE `passbook_1010112` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;



INSERT INTO `passbook_1010112` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '589306552', '26/12/20 02:55:43 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '583402470', '26/12/20 03:01:35 PM', 'Cash Deposit/583402470572', '55000', '0', '55000', 'Cash Deposit'),
(5, '841496557', '26/07/21 11:08:04 PM', 'Varsha Ganguri/1011801011046/1011', '0', '250', '4750', 'Billings'),
(6, '491178166', '27/07/21 02:46:16 PM', 'Noob Nikhila/1011951011439/1011', '0', '1100', '3650', 'Personal');



CREATE TABLE `passbook_1011046` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;



INSERT INTO `passbook_1011046` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '117402234543', '26/07/21 10:34:49 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '406194305816', '26/07/21 10:50:56 PM', 'Cash Deposit/406194305816', '7500', '0', '7500', 'Cash Deposit'),
(3, '841496557790', '26/07/21 11:08:04 PM', 'Rahul Raj/101107741010112/1011', '250', '0', '7750', 'Billings'),
(4, '429360631', '27/07/21 10:35:20 AM', 'Noob Nikhila/1011951011439/1011', '0', '660', '7090', 'Sales');



CREATE TABLE `passbook_1011426` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passbook_1011426` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '206288618472', '26/07/21 11:24:10 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '807477284', '26/07/21 11:32:55 PM', 'Cash Deposit/807477284', '2100', '0', '2100', 'Cash Deposit'),
(3, '983840333', '26/07/21 11:57:18 PM', 'Noob Nikhila/1011951011439/1011', '0', '175', '1925', 'Rst Bills'),
(4, '200212796', '27/07/21 03:14:13 PM', 'Noob Nikhila/1011951011439/1011', '37', '0', '1962', 'domain and stuff');



CREATE TABLE `passbook_1011439` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passbook_1011439` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '975444354', '26/07/21 11:52:58 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '983840333', '26/07/21 11:57:18 PM', 'Krishna Ronaldo/1011411011426/1011', '175', '0', '175', 'Rst Bills'),
(3, '429360631', '27/07/21 10:35:20 AM', 'Varsha Ganguri/1011801011046/1011', '660', '0', '835', 'Sales'),
(4, '613135262', '27/07/21 02:33:10 PM', 'Turuun sss/1011921011768/1011', '0', '50', '785', 'Rbills'),
(5, '491178166', '27/07/21 02:46:16 PM', 'Rahul Raj/1011071010112/1011', '1100', '0', '1885', 'Personal'),
(6, '384183921', '27/07/21 03:00:04 PM', 'Sava Saran/1011751011742/1011', '0', '113', '1772', 'sales'),
(7, '123457098', '27/07/21 03:07:47 PM', 'Sava Saran/1011751011742/1011', '2', '0', '1774', 'cashback'),
(8, '200212796', '27/07/21 03:14:13 PM', 'Krishna Ronaldo/1011411011426/1011', '0', '37', '1737', 'domain and stuff'),
(9, '238728498', '27/07/21 03:15:46 PM', 'Cash Deposit/238728498', '3650', '0', '5387', 'Cash Deposit'),
(10, '350533416', '27/07/21 03:25:05 PM', 'Divya Rav/1011591011722/1011', '0', '113', '5274', 'Monthly Internet Bill Payment');



CREATE TABLE `passbook_1011722` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passbook_1011722` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '146191935', '27/07/21 03:20:32 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '350533416', '27/07/21 03:25:05 PM', 'Noob Nikhila/1011951011439/1011', '113', '0', '113', 'Monthly Internet Bill Payment'),
(3, '265493438', '27/07/21 03:50:25 PM', 'Edward Weese/1011801011950/1011', '97', '0', '210', 'Internet Bills Payment');



CREATE TABLE `passbook_1011742` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passbook_1011742` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '877580638', '27/07/21 02:55:25 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '384183921', '27/07/21 03:00:04 PM', 'Noob Nikhila/1011951011439/1011', '113', '0', '113', 'sales'),
(3, '123457098', '27/07/21 03:07:47 PM', 'Noob Nikhila/1011951011439/1011', '0', '2', '111', 'cashback');



CREATE TABLE `passbook_1011768` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passbook_1011768` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '492641662', '27/07/21 10:44:50 AM', 'Account Opening', '0', '0', '0', NULL),
(2, '613135262', '27/07/21 02:33:10 PM', 'Noob Nikhila/1011951011439/1011', '50', '0', '50', 'Rbills'),
(3, '693782042', '27/07/21 03:49:15 PM', 'Edward Weese/1011801011950/1011', '165', '0', '215', 'none');


CREATE TABLE `passbook_1011950` (
  `id` int(255) NOT NULL,
  `Transaction_id` varchar(255) DEFAULT NULL,
  `Transaction_date` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Cr_amount` varchar(255) DEFAULT NULL,
  `Dr_amount` varchar(255) DEFAULT NULL,
  `Net_Balance` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passbook_1011950` (`id`, `Transaction_id`, `Transaction_date`, `Description`, `Cr_amount`, `Dr_amount`, `Net_Balance`, `Remark`) VALUES
(1, '470459348', '27/07/21 03:42:57 PM', 'Account Opening', '0', '0', '0', NULL),
(2, '618213240', '27/07/21 03:47:09 PM', 'Cash Deposit/618213240', '6000', '0', '6000', 'Cash Deposit'),
(3, '693782042', '27/07/21 03:49:15 PM', 'Turuun sss/1011921011768/1011', '0', '165', '5835', 'none'),
(4, '265493438', '27/07/21 03:50:25 PM', 'Divya Rav/1011591011722/1011', '0', '97', '5738', 'Internet Bills Payment');



CREATE TABLE `pending_accounts` (
  `Application_no` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Mobile_no` varchar(50) DEFAULT NULL,
  `Email_id` varchar(50) DEFAULT 'Nil',
  `Landline_no` varchar(50) DEFAULT 'Nil',
  `DOB` varchar(50) DEFAULT NULL,
  `SSN` varchar(50) DEFAULT NULL,
  `CITIZENSHIP` varchar(50) DEFAULT NULL,
  `Home_Addr` varchar(100) DEFAULT NULL,
  `Office_Addr` varchar(100) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Pin` varchar(50) DEFAULT NULL,
  `Area_Loc` varchar(255) DEFAULT NULL,
  `Nominee_name` varchar(255) DEFAULT NULL,
  `Nominee_ac_no` varchar(255) DEFAULT NULL,
  `Account_type` varchar(50) DEFAULT NULL,
  `Application_Date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `staff` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `doj` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `gender` char(1) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `staff` (`id`, `name`, `dob`, `relationship`, `department`, `doj`, `address`, `mobile`, `email`, `pwd`, `gender`, `lastlogin`) VALUES
(1, 'Ethel C Dziedzic', '1990-05-05', 'married', 'revenue', '1999-11-11', '1293 Public Works Drive', '7854444444', 'etttt@gmail.com', 'qwerty', 'M', '2015-01-11 10:29:48'),
(2, 'Ronald L Braun', '1998-08-21', 'unmarried', 'revenue', '2013-08-03', '4112 Grove Street', '9009000020', 'rlbb@gmail.com', 'qweer', 'M', '2015-01-10 21:22:59'),
(4, 'Debra S Chavez\n', '1989-05-31', 'married', 'revenue', '2015-01-04', '4937 Edington Drive', '8542221010', 'debr@gmail.com', '6969', 'M', '2019-03-04 05:11:00'),
(5, 'Denise R Lemus', '1980-04-21', 'married', 'revenue', '1991-01-01', '4920 Hickory Street', '7850001256', 'denise@gmail.com', '9600pass', 'M', '2020-03-01 00:00:00');

-- drop table new_issues
CREATE TABLE new_issues(
`id` int(9) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `customer_id` int(9)  NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `issue_id` int(9) AUTO_INCREMENT Primary key  NOT NULL,
  `issue` varchar(255) NOT NULL);

ALTER TABLE `atm`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `bank_customers`
  ADD PRIMARY KEY (`Id`);


ALTER TABLE `bank_staff`
  ADD PRIMARY KEY (`Id`);


ALTER TABLE `beneficiary_1010112`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011046`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011426`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011439`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011722`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011742`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011768`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `beneficiary_1011950`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cheque_book`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1010112`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011046`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011426`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011439`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011722`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011742`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011768`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `passbook_1011950`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `pending_accounts`
  ADD PRIMARY KEY (`Application_no`);


ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `atm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `bank_customers`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `bank_staff`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `beneficiary_1010112`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `beneficiary_1011046`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `beneficiary_1011426`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `beneficiary_1011439`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `beneficiary_1011722`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `beneficiary_1011742`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `beneficiary_1011768`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `beneficiary_1011950`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `cheque_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `passbook_1010112`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `passbook_1011046`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `passbook_1011426`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `passbook_1011439`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `passbook_1011722`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `passbook_1011742`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `passbook_1011768`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `passbook_1011950`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `staff`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

drop table loan_requests;
CREATE TABLE loan_requests (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type_of_loan` ENUM('educational', 'home', 'vehicle', 'business', 'personal') NOT NULL,
  `loan_amount` DECIMAL(10, 2) NOT NULL,
  `annual_income` DECIMAL(10, 2) NOT NULL,
  `Customer_id` int(100) NOT NULL,
  `status` ENUM('approved','pending','declined') default 'pending',
  PRIMARY KEY (`id`)
);

INSERT INTO loan_requests (type_of_loan, loan_amount, annual_income, Customer_id) VALUES ("educational",1000,500,1);

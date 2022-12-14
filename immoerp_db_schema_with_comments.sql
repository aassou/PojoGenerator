CREATE TABLE `table_buying_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_alert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `message` text,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_phone_book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `phone1` varchar(50) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `phone3` varchar(50) DEFAULT NULL,
  `phone4` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_property` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(45) DEFAULT NULL,
  `etage` varchar(45) DEFAULT NULL,
  `official_size` decimal(10,2) DEFAULT NULL COMMENT "Official Apartment Size in Meters",
  `secondary_size` decimal(10,2) DEFAULT NULL COMMENT "Secondary Apartment Size in Meters",
  `facade` varchar(45) DEFAULT NULL,
  `is_reserved` tinyint DEFAULT 0,
  `reserved_by` varchar(255) DEFAULT NULL COMMENT "Name of customer reserving this property",
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE `table_apartment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `official_size` decimal(10,2) DEFAULT NULL COMMENT "Official Apartment Size in Meters",
  `secondary_size` decimal(10,2) DEFAULT NULL COMMENT "Secondary Apartment Size in Meters",
  `price` decimal(10,2) DEFAULT NULL,
  `resell_price` decimal(12,2) DEFAULT NULL,
  `floor_number` varchar(45) DEFAULT NULL,
  `facade` varchar(45) DEFAULT NULL,
  `rooms_number` varchar(45) DEFAULT NULL COMMENT "This field is a description of the rooms number including the kitchen and the bathroom",
  `status` varchar(45) DEFAULT NULL,
  `basement` varchar(45) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `is_reserved` tinyint DEFAULT 0,
  `reserved_by` varchar(255) DEFAULT NULL COMMENT "Name of customer reserving this apartment",
  `land_title` varchar(255) DEFAULT NULL COMMENT "Land title is an administrative number given by authorities for each real estate property ",
  `official_price` decimal(10,2) DEFAULT NULL,
  `official_advance_amount` decimal(10,2) DEFAULT NULL COMMENT "Official amount of money paid in advance",
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_commercial_store` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `official_size` decimal(10,2) DEFAULT NULL COMMENT "Official Apartment Size in Meters",
  `secondary_size` decimal(10,2) DEFAULT NULL COMMENT "Secondary Apartment Size in Meters",
  `facade` varchar(45) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `resell_price` decimal(12,2) DEFAULT NULL,
  `mezzanine` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `is_reserved` tinyint DEFAULT 0,
  `reserved_by` varchar(255) DEFAULT NULL COMMENT "Name of customer reserving this apartment",
  `land_title` varchar(255) DEFAULT NULL COMMENT "Land title is an administrative number given by authorities for each real estate property ",
  `official_price` decimal(10,2) DEFAULT NULL,
  `official_advance_amount` decimal(10,2) DEFAULT NULL COMMENT "Official amount of money paid in advance",
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_block` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `tranche_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_bug` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bug` text,
  `link` text,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_business_plan_cost` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cost_type` varchar(255) DEFAULT NULL,
  `land_size` decimal(12,2) DEFAULT NULL,
  `unit_price` decimal(12,2) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `description` text,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_business_plan_cost_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_business_plan_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) DEFAULT NULL,
  `land_size` decimal(12,2) DEFAULT NULL,
  `unit_price` decimal(12,2) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `description` text,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_business_plan_product_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_fund` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_fund_in` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(12,2) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_fund_out` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(12,2) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_expenses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_common_expenses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_syndicate_expenses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `arabic_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `arabic_address` varchar(255) DEFAULT NULL,
  `phone1` varchar(45) DEFAULT NULL,
  `phone2` varchar(45) DEFAULT NULL,
  `cin` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `code` text,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_customer_waiting_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone1` varchar(30) DEFAULT NULL,
  `phone2` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `application_date` date DEFAULT NULL,
  `wanted_property` varchar(50) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `property_size` varchar(255) DEFAULT NULL,
  `sales_location` varchar(100) DEFAULT NULL,
  `purchase_location` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_customer_ranking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `ranking` int DEFAULT NULL,
  `observation` text,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_internal_collaboration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  `status` varchar(5) DEFAULT NULL,
  `duree` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
)
COMMENT "This table is used to let the users of this application to mention the ideas of improvment for the system."
;

CREATE TABLE `table_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `provider_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `order_number` varchar(50) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `delivery_code` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
)
COMMENT "These are orders made by the real estate company to the providers to get building materials"
;

CREATE TABLE `table_order_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(100) DEFAULT NULL,
  `product_label` varchar(50) DEFAULT NULL,
  `quantity` decimal(12,2) DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_commission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text,
  `agent` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `contract_code` varchar(255) DEFAULT NULL,
  `commission_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `arabic_name` varchar(50) DEFAULT NULL,
  `arabic_address` varchar(255) DEFAULT NULL,
  `ceo` varchar(50) DEFAULT NULL,
  `cin_ceo` varchar(50) DEFAULT NULL,
  `rc` varchar(50) DEFAULT NULL COMMENT "Legal data: Responsabilit?? Civile",
  `ifs` varchar(50) DEFAULT NULL COMMENT  "Legal data: Impot Sur la Fortune",
  `patente` varchar(50) DEFAULT NULL,
  `ice` varchar(50) DEFAULT NULL COMMENT  "Legal data: Identifiant Commun des Entreprises",,
  `phone` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_company_system` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_bank_account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_configuration_modules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `moduleName` varchar(255) DEFAULT NULL,
  `isShown` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_configuration_order_by` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tableName` varchar(100) DEFAULT NULL,
  `tableOrder` text,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_vacation_employee_project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `idEmploye` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_employee_vacation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `employee_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_customer_contract` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `contract_date` date DEFAULT NULL,
  `selling_price` decimal(12,2) DEFAULT NULL,
  `arabic_selling_price` varchar(255) DEFAULT NULL,
  `advance_amount` decimal(12,2) DEFAULT NULL,
  `arabic_advance_amount` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_duration` int DEFAULT NULL COMMENT "The agreed time to make the whole payment of the property (Eg: 36 months)",
  `month_periods` int DEFAULT NULL COMMENT "The period of time between each amount in months",
  `financial_commitment` decimal(12,2) DEFAULT NULL COMMENT "The amount to pay in each period",
  `change_request` text COMMENT "The customer request to make changes in his property",
  `change_request_image` text,
  `customer_observation` text,
  `customer_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `property_id` int DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_resold` tinyint DEFAULT 0,
  `bank_check_number` varchar(255) DEFAULT NULL,
  `arabic_company_name` int DEFAULT NULL COMMENT "Deprecated: Here we use int because we store the id of the company.",
  `company_id` int DEFAULT NULL COMMENT "We should use this filed instead of <arabic_company_name>",
  `arabic_property_status` varchar(100) DEFAULT NULL,
  `arabic_facade` varchar(50) DEFAULT NULL,
  `arabic_legal_articles` text,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_contract_special_cases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `observation` text,
  `status` int DEFAULT NULL,
  `contract_code` varchar(255) DEFAULT NULL,
  `contract_id` int NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
)
COMMENT "This table is used for customers who are not intented to follow a monthly period payment type."
;

CREATE TABLE `table_contract_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `operation_date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `bank_check_number` varchar(100) DEFAULT NULL,
  `employee_contract_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_craftsman_contract` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `measurement_unit` varchar(30) DEFAULT NULL,
  `measurement_unit_name` varchar(50) DEFAULT NULL,
  `measurement_unit_arabic_name` varchar(100) DEFAULT NULL,
  `measurement_unit_number` decimal(10,2) DEFAULT NULL,
  `secondary_unit_price` decimal(10,2) DEFAULT NULL,
  `secondary_measurement_unit` varchar(30) DEFAULT NULL,
  `secondary_measurement_unit_name` varchar(50) DEFAULT NULL,
  `secondary_measurement_unit_arabic_name` varchar(100) DEFAULT NULL,
  `secondary_measurement_unit_number` decimal(10,2) DEFAULT NULL,
  `works` varchar(100) DEFAULT NULL,
  `arabic_works` varchar(100) DEFAULT NULL,
  `arabic_articles` text,
  `total` decimal(12,2) DEFAULT NULL,
  `craftsman_name` varchar(100) DEFAULT NULL,
  `craftsman_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_contrattravail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `adresse` text,
  `dateNaissance` varchar(25) DEFAULT NULL,
  `matiere` varchar(100) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `mesure` decimal(12,2) DEFAULT NULL,
  `priceTotal` decimal(12,2) DEFAULT NULL,
  `dateContrat` date DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_contrattravailreglement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(12,2) DEFAULT NULL,
  `motif` text,
  `dateReglement` date DEFAULT NULL,
  `idContratTravail` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `arabic_name` varchar(50) DEFAULT NULL,
  `arabic_address` varchar(255) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `phone1` varchar(50) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_craftsman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cin` varchar(100) DEFAULT NULL,
  `picture` text,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `marital_status` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_employee_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cin` varchar(100) DEFAULT NULL,
  `picture` text,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `marital_status` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_provider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone1` varchar(45) DEFAULT NULL,
  `phone2` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action` varchar(50) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_delivery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `type` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `designation` text,
  `quantity` decimal(12,2) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `is_paid` decimal(10,2) DEFAULT 0,
  `rest` decimal(10,2) DEFAULT NULL,
  `delivery_date` date NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `provider_id` int NOT NULL,
  `project_id` int NOT NULL,
  `other_project` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_delivery_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` int NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `designation` text,
  `unit_price` decimal(16,4) DEFAULT NULL,
  `quantity` decimal(16,4) DEFAULT NULL,
  `delivery_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_mail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `sender` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_notes_client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `project_id` int DEFAULT NULL,
  `codeContrat` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_payment_operation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `observation` text,
  `amount` decimal(12,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `contract_id` int DEFAULT NULL,
  `bank_check_number` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_parking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` int DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `contract_id` int DEFAULT NULL,
  `tranche_id` int DEFAULT NULL,
  `block_id` int DEFAULT NULL,
  `block_name` varchar(55) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_apartment_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `apartment_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_delivery_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `delivery_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_commercial_store_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `commercial_store_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_land_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `land_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `arabic_name` varchar(100) DEFAULT NULL,
  `arabic_address` varchar(255) DEFAULT NULL,
  `project_sorting` float DEFAULT NULL COMMENT "For some frontend specs, we need some sorting for our project",
  `land_title` varchar(255) DEFAULT NULL,
  `land_size` decimal(10,2) DEFAULT NULL,
  `description` text,
  `budget` decimal(12,2) DEFAULT NULL,
  `lot_number` varchar(255) DEFAULT NULL,
  `legal_authorization_number` varchar(255) DEFAULT NULL,
  `legal_authorization_date` date DEFAULT NULL,
  `floors` int DEFAULT NULL,
  `basement` decimal(9,2) DEFAULT NULL,
  `rez_de_chaussee` decimal(9,2) DEFAULT NULL,
  `mezzanin` decimal(9,2) DEFAULT NULL,
  `stairwell` decimal(9,2) DEFAULT NULL COMMENT "French: La cage escalier",
  `terrace` decimal(9,2) DEFAULT NULL,
  `floor_size` decimal(9,2) DEFAULT NULL,
  `time_limit` int DEFAULT NULL,
  `price_per_meter_tax_included` decimal(9,2) DEFAULT NULL,
  `price_per_meter_tax_excluded` decimal(9,2) DEFAULT NULL,
  `value_added_tax` decimal(9,2) DEFAULT NULL,
  `architect_name` text,
  `reinforced_concrete_architect_name` text DEFAULT NULL COMMENT "French: Architecte Beton Armee",
  `status` int DEFAULT NULL,
  `closed` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_provied_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(12,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `provider_id` int DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `bank_check_number` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_contract_expected_payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `expected_payment_date` date DEFAULT NULL,
  `contract_code` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_bank_statement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `operation_date` varchar(12) DEFAULT NULL,
  `validation_date` varchar(12) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `out_operation` decimal(12,2) DEFAULT NULL,
  `in_operation` decimal(12,2) DEFAULT NULL,
  `project` varchar(50) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `bank_account_id` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_project_salaries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `salary` decimal(12,2) DEFAULT NULL,
  `days_number` decimal(12,2) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `employee_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_compnany_salaries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `salary` decimal(12,2) DEFAULT NULL,
  `bounty` decimal(12,2) DEFAULT NULL,
  `operation_date` date DEFAULT NULL,
  `employee_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_shareholder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_syndic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `operation_date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `content` text,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_terrain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `price` decimal(12,2) DEFAULT NULL,
  `seller` varchar(100) DEFAULT NULL,
  `buying_fees` decimal(12,2) DEFAULT NULL,
  `land_size` decimal(12,2) DEFAULT NULL,
  `location` text,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_todo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `todo` varchar(255) DEFAULT NULL,
  `priority` int NOT NULL DEFAULT '0',
  `status` int DEFAULT NULL,
  `expected_date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_tranche` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `project_id` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_type_syndic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `fee` decimal(12,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_expenses_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_common_expenses_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_syndic_expenses_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `table_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profil` varchar(30) NOT NULL,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `is_active` tinyint DEFAULT 1,
  `is_published` tinyint DEFAULT 1,
  PRIMARY KEY (`id`)
);

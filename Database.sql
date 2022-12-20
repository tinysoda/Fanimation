CREATE TABLE `user` (
  `userID` bigint PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_name` varchar[50] DEFAULT null,
  `email` varchar[50],
  `password` varchar[32] NOT NULL,
  `tel_num` varchar[15],
  `admin` tinyint[1] NOT NULL DEFAULT 0,
  `registered_at` datetime NOT NULL,
  `last_login` datetime DEFAULT null
);

CREATE TABLE `product` (
  `productID` bigint PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `userID` bigint NOT NULL,
  `categoryID` bigint,
  `product_name` varchar[50] NOT NULL,
  `thumbnail` text NOT NULL,
  `type` varchar[20] NOT NULL,
  `price` varchar[20] NOT NULL DEFAULT 0,
  `brand` varchar[20] NOT NULL,
  `decription` text DEFAULT null,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT null
);

CREATE TABLE `product_review` (
  `review_ID` bigint PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `productID` bigint NOT NULL,
  `product_name` varchar[50] NOT NULL,
  `content` text DEFAULT null,
  `rating` tinyint[3] NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
);

CREATE TABLE `product_category` (
  `productID` bigint NOT NULL,
  `categoryID` bigint NOT NULL,
  `category_name` varchar[20] NOT NULL,
  PRIMARY KEY (`productID`, `categoryID`)
);

CREATE TABLE `cart` (
  `cartID` bigint PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `productID` bigint NOT NULL,
  `quantity` tinyint[5] NOT NULL DEFAULT 0,
  `userID` bigint NOT NULL,
  `status` tinyint[10] NOT NULL DEFAULT 0,
  `user_name` varchar[50] DEFAULT null,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT null
);

CREATE TABLE `order` (
  `orderID` bigint PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `userID` bigint NOT NULL,
  `status` tinyint[10] NOT NULL DEFAULT 0,
  `total` float NOT NULL DEFAULT 0,
  `address` varchar[100] DEFAULT null,
  `created_at` datetime NOT NULL
);

CREATE TABLE `transaction` (
  `transactionID` bigint PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `userID` bigint NOT NULL,
  `orderID` bigint NOT NULL,
  `status` tinyint[10] NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
);

CREATE UNIQUE INDEX `user_index_0` ON `user` (`tel_num`);

CREATE UNIQUE INDEX `user_index_1` ON `user` (`email`);

CREATE INDEX `idx_product_user` ON `product` (`userID`);

CREATE INDEX `idx_product_review` ON `product_review` (`productID`);

CREATE INDEX `idx_product_category` ON `product_category` (`categoryID`);

CREATE INDEX `idx_product_product` ON `product_category` (`productID`);

CREATE INDEX `idx_cart_user` ON `cart` (`userID`);

CREATE INDEX `idx_order_user` ON `order` (`userID`);

CREATE INDEX `idx_transaction_user` ON `transaction` (`userID`);

CREATE INDEX `idx_transaction_order` ON `transaction` (`orderID`);

ALTER TABLE `product` ADD FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

ALTER TABLE `product` ADD FOREIGN KEY (`categoryID`) REFERENCES `product_category` (`categoryID`);

ALTER TABLE `product_review` ADD FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

ALTER TABLE `product_category` ADD FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

ALTER TABLE `cart` ADD FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

ALTER TABLE `cart` ADD FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

ALTER TABLE `order` ADD FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

ALTER TABLE `transaction` ADD FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

ALTER TABLE `transaction` ADD FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`);

USE `train`;
CREATE TABLE IF NOT EXISTS `trainsandstations` (
	`Train_Number`	varchar ( 10 ) NOT NULL,
	`Station`	varchar ( 45 ) DEFAULT NULL,
	`Time`	time DEFAULT NULL,
	`class_id`	integer NOT NULL,
	`line_id`	integer NOT NULL,
	`speed_id`	integer NOT NULL,
	`id`	integer NOT NULL,
	`class2_id`	integer DEFAULT NULL
)ENGINE=INNODB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
INSERT INTO `trainsandstations` VALUES ('1','القاهرة','03:00:00',6,1,2,1,NULL);
INSERT INTO `trainsandstations` VALUES ('1','شبرا الخيمة','03:12:00',6,1,2,2,NULL);
INSERT INTO `trainsandstations` VALUES ('1','بنها','03:42:00',6,1,2,3,NULL);
INSERT INTO `trainsandstations` VALUES ('1','قويسنا','03:54:00',6,1,2,4,NULL);
INSERT INTO `trainsandstations` VALUES ('1','بركة السبع','04:06:00',6,1,2,5,NULL);
INSERT INTO `trainsandstations` VALUES ('1','طنطا','04:25:00',6,1,2,6,NULL);
INSERT INTO `trainsandstations` VALUES ('1','كفر الزيات','04:41:00',6,1,2,7,NULL);
INSERT INTO `trainsandstations` VALUES ('1','التوفيقية','04:50:00',6,1,2,8,NULL);
INSERT INTO `trainsandstations` VALUES ('1','ايتاي البارود','05:01:00',6,1,2,9,NULL);
INSERT INTO `trainsandstations` VALUES ('1','دمنهور','05:22:00',6,1,2,10,NULL);
INSERT INTO `trainsandstations` VALUES ('1','ابوحمص','05:39:00',6,1,2,11,NULL);
INSERT INTO `trainsandstations` VALUES ('1','كفر الدوار','05:56:00',6,1,2,12,NULL);
INSERT INTO `trainsandstations` VALUES ('1','سيدي جابر','06:22:00',6,1,2,13,NULL);
INSERT INTO `trainsandstations` VALUES ('1','الاسكندرية','06:30:00',6,1,2,14,NULL);
INSERT INTO `trainsandstations` VALUES ('661','ايتاي البارود','05:50:00',5,1,3,27,NULL);
INSERT INTO `trainsandstations` VALUES ('661','دمنهور','06:15:00',5,1,3,28,NULL);
INSERT INTO `trainsandstations` VALUES ('661','ابوحمص','06:33:00',5,1,3,29,NULL);
INSERT INTO `trainsandstations` VALUES ('661','كفر الدوار','06:51:00',5,1,3,30,NULL);
INSERT INTO `trainsandstations` VALUES ('661','سيدي جابر','07:17:00',5,1,3,31,NULL);
INSERT INTO `trainsandstations` VALUES ('661','الاسكندرية','07:25:00',5,1,3,32,NULL);
INSERT INTO `trainsandstations` VALUES ('3','طنطا','05:30:00',5,1,3,33,NULL);
INSERT INTO `trainsandstations` VALUES ('3','كفر الزيات','05:47:00',5,1,3,34,NULL);
INSERT INTO `trainsandstations` VALUES ('3','التوفيقية','05:56:00',5,1,3,35,NULL);
INSERT INTO `trainsandstations` VALUES ('3','ايتاي البارود','06:10:00',5,1,3,36,NULL);
INSERT INTO `trainsandstations` VALUES ('3','دمنهور','06:30:00',5,1,3,37,NULL);
INSERT INTO `trainsandstations` VALUES ('3','ابوحمص','06:48:00',5,1,3,38,NULL);
INSERT INTO `trainsandstations` VALUES ('3','كفر الدوار','07:06:00',5,1,3,39,NULL);
INSERT INTO `trainsandstations` VALUES ('3','سيدي جابر','07:32:00',5,1,3,40,NULL);
INSERT INTO `trainsandstations` VALUES ('3','الاسكندرية','07:40:00',5,1,3,41,NULL);
INSERT INTO `trainsandstations` VALUES ('889/92','دمنهور','07:10:00',5,1,3,42,NULL);
INSERT INTO `trainsandstations` VALUES ('889/92','ابوحمص','07:28:00',5,1,3,43,NULL);
INSERT INTO `trainsandstations` VALUES ('889/92','كفر الدوار','07:46:00',5,1,3,44,NULL);
INSERT INTO `trainsandstations` VALUES ('889/92','سيدي جابر','08:12:00',5,1,3,45,NULL);
INSERT INTO `trainsandstations` VALUES ('889/92','الاسكندرية','08:20:00',5,1,3,46,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','المنصورة','05:25:00',8,1,2,47,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','طلخا','05:31:00',8,1,2,48,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','سمنود','05:48:00',8,1,2,49,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','المحلة الكبري','06:00:00',8,1,2,50,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','محلة روح','06:17:00',8,1,2,51,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','طنطا','06:35:00',8,1,2,52,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','كفر الزيات','06:51:00',8,1,2,53,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','ايتاي البارود','07:07:00',8,1,2,54,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','دمنهور','07:27:00',8,1,2,55,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','ابوحمص','07:44:00',8,1,2,56,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','كفر الدوار','08:00:00',8,1,2,57,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','سيدي جابر','08:27:00',8,1,2,58,NULL);
INSERT INTO `trainsandstations` VALUES ('584/5','الاسكندرية','08:35:00',8,1,2,59,NULL);

CREATE TABLE IF NOT EXISTS `speed` (
	`id`	integer NOT NULL,
	`km`	integer NOT NULL
)ENGINE=INNODB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

INSERT INTO `speed` VALUES (1,120);
INSERT INTO `speed` VALUES (2,105);
INSERT INTO `speed` VALUES (3,90);


CREATE TABLE IF NOT EXISTS `line` (
	`id`	integer NOT NULL,
	`name`	varchar ( 100 ) NOT NULL
)ENGINE=INNODB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
INSERT INTO `line` VALUES (1,'القاهرة - طنطا - الإسكندرية');
INSERT INTO `line` VALUES (2,'الإسكندرية - طنطا - القاهرة');
INSERT INTO `line` VALUES (3,'القاهرة - الإسماعيلية - بورسعيد');
INSERT INTO `line` VALUES (4,'بورسعيد - الإسماعيلية - القاهرة');
INSERT INTO `line` VALUES (5,'عين شمس - السويس');
INSERT INTO `line` VALUES (6,'السويس - عين شمس');
INSERT INTO `line` VALUES (7,'إسماعيلية - السويس');
INSERT INTO `line` VALUES (8,'السويس - إسماعيلية');
INSERT INTO `line` VALUES (9,'القاهرة - طنطا - المنصورة - دمياط');
INSERT INTO `line` VALUES (10,'دمياط - المنصورة - طنطا - القاهرة');
INSERT INTO `line` VALUES (11,'طنطا - المنصورة - دمياط');
INSERT INTO `line` VALUES (12,'دمياط - المنصورة - طنطا');
INSERT INTO `line` VALUES (13,'القاهرة - شبين القناطر - بلبيس - الزقازيق - المنصورة');
INSERT INTO `line` VALUES (14,'المنصورة - الزقازيق - بلبيس - شبين القناطر - القاهرة');
INSERT INTO `line` VALUES (15,'أبو كبير - الصالحية');
INSERT INTO `line` VALUES (16,'الصالحية - أبو كبير');
INSERT INTO `line` VALUES (17,'فاقوس - السماعة');
INSERT INTO `line` VALUES (18,'السماعة - فاقوس');
INSERT INTO `line` VALUES (19,'المنصورة - سندوب - المطرية');
INSERT INTO `line` VALUES (20,'المطرية - سندوب - المنصورة');
INSERT INTO `line` VALUES (21,'القاهرة - القناطر - منوف - طنطا');
INSERT INTO `line` VALUES (22,'طنطا - منوف - القناطر - القاهرة');
INSERT INTO `line` VALUES (23,'القاهرة - الخطاطية - إيتاى البارود');
INSERT INTO `line` VALUES (24,'إيتاى البارود - الخطاطية - القاهرة');
INSERT INTO `line` VALUES (25,'23 يوليو - شبين القناطر');
INSERT INTO `line` VALUES (26,'شبين القناطر - 23 يوليو');
INSERT INTO `line` VALUES (27,'منوف - كفر الزيات');
INSERT INTO `line` VALUES (28,'كفر الزيات - منوف');
INSERT INTO `line` VALUES (29,'بنها - منوف');
INSERT INTO `line` VALUES (30,'منوف - بنها');
INSERT INTO `line` VALUES (31,'بنها - ميت بره - زفتى - ميت غمر');
INSERT INTO `line` VALUES (32,'ميت غمر - زفتى - ميت بره - بنها');
INSERT INTO `line` VALUES (33,'طنطا - السنطة - زفتى - ميت غمر');
INSERT INTO `line` VALUES (34,'ميت غمر - زفتى - السنطة - طنطا');
INSERT INTO `line` VALUES (35,'محلة روح - السنطة');
INSERT INTO `line` VALUES (36,'السنطة - محلة روح');
INSERT INTO `line` VALUES (37,'طنطا - قلين - شربين');
INSERT INTO `line` VALUES (38,'شربين - قلين - طنطا');
INSERT INTO `line` VALUES (39,'طنطا - قلين - دسوق - دمنهور');
INSERT INTO `line` VALUES (40,'دمنهور - دسوق - قلين - طنطا');
INSERT INTO `line` VALUES (41,'دسوق - مطوبس - البصيلي');
INSERT INTO `line` VALUES (42,'البصيلي - مطوبس - دسوق');
INSERT INTO `line` VALUES (43,'الإسكندرية - رشيد');
INSERT INTO `line` VALUES (44,'رشيد - الإسكندرية');
INSERT INTO `line` VALUES (45,'الإسكندرية - مرسى مطروح');
INSERT INTO `line` VALUES (46,'مرسى مطروح - الإسكندرية');
INSERT INTO `line` VALUES (47,'الخضرة - محرم بك - برج العرب الجديدة');
INSERT INTO `line` VALUES (48,'برج العرب الجديدة - محرم بك - الخضرة');
INSERT INTO `line` VALUES (49,'القاهرة - الأقصر - أسوان - السد العالي');
INSERT INTO `line` VALUES (50,'السد العالي - أسوان - الأقصر - القاهرة');
INSERT INTO `line` VALUES (51,'السد العالي - أسوان');
INSERT INTO `line` VALUES (52,'أسوان - السد العالي');
INSERT INTO `line` VALUES (53,'الواسطي - الفيوم');
INSERT INTO `line` VALUES (54,'الفيوم - الواسطي');
INSERT INTO `line` VALUES (55,'الخارجية - قنا');
INSERT INTO `line` VALUES (56,'قنا - الخارجية');
INSERT INTO `line` VALUES (57,'الخارجية - واحة');
INSERT INTO `line` VALUES (58,'واحة - الخارجية');
INSERT INTO `line` VALUES (61,'البصيلي - مطوبس - القصابي بحرى');
INSERT INTO `line` VALUES (62,'القصابي بحرى - مطوبس - البصيلي');


CREATE TABLE IF NOT EXISTS `class` (
	`id`	integer NOT NULL,
	`type`	varchar ( 100 ) NOT NULL
)ENGINE=INNODB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
INSERT INTO `class` VALUES (1,'نوم مكيف');
INSERT INTO `class` VALUES (2,'أولى وثانية مكيفة');
INSERT INTO `class` VALUES (3,'فاخرة مكيف الهواء');
INSERT INTO `class` VALUES (4,'يتم الحجز عليه نقداً');
INSERT INTO `class` VALUES (5,'مطور (ركاب)');
INSERT INTO `class` VALUES (6,'مميز');
INSERT INTO `class` VALUES (7,'إكسبريس');
INSERT INTO `class` VALUES (8,'مكيف + به عربات مميزة');
INSERT INTO `class` VALUES (9,'VIP');
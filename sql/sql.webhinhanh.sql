create database webhinhanh;
use webhinhanh;
create table taikhoan(
	MaTaiKhoan int auto_increment,
    TenDangNhap varchar(50) unique,
    MatKhau varchar(200),
    Email varchar(50),
    Active int,
    Verification varchar(45),
    primary key(MaTaiKhoan)
);
create table bosuutap(
	MaBoSuuTap int auto_increment,
    TenBoSuuTap varchar(50),
    AnhBoSuuTap varchar(50),
    MoTa varchar(150),
    primary key(MaBoSuuTap)
);
create table HinhAnh(
	MaHinhAnh int auto_increment,
    TenHinhAnh varchar(200),
    KichCo varchar(20),
    DoPhanGiai varchar(20),
    MoTaHinhAnh varchar(50),
	MaBoSuuTap int,
    MaTaiKhoan int,
    AnhTaiTro int,
    PheDuyet int,
    primary key(MaHinhAnh),
    constraint FK_BoSuuTap foreign key(MaBoSuuTap) references bosuutap(MaBoSuuTap),
    constraint FK_TaiKhoan foreign key(MaTaiKhoan) references taikhoan(MaTaiKhoan)
);
create table chucvu(
	MaChucVu int auto_increment,
    TenChucVu varchar(50),
    primary key(MaChucVu)
);
/*insert bo suu tap*/
insert into bosuutap(TenBoSuuTap,AnhBoSuuTap,MoTa) value('Động Vật','dog-min.jpg','Khám phá thế giới động vật qua những hình ảnh và những khoảng khắc của chúng.');
insert into bosuutap(TenBoSuuTap,AnhBoSuuTap,MoTa) value('Thiên Nhiên','nature-min.jpg','Khám phá vẻ đẹp hùng vĩ của thiên nhiên qua hình ảnh.');
insert into bosuutap(TenBoSuuTap,AnhBoSuuTap,MoTa) value('Đồ Ăn','food-min.jpg','Đắm chìm vào thế giới của đồ ăn qua những hình ảnh của chúng tôi.');
insert into bosuutap(TenBoSuuTap,AnhBoSuuTap,MoTa) value('Công nghệ','tech-min.jpg','Cùng nhau học hỏi và khám phá công nghệ.');
insert into bosuutap(TenBoSuuTap,AnhBoSuuTap,MoTa) value('Lễ Hội','holiday-min.jpg','Tìm hiểu về những lễ hội ,tập tục văn hóa nổi bật.');
insert into bosuutap(TenBoSuuTap,AnhBoSuuTap,MoTa) value('Trò Chơi','game-min.jpg','Lạc vào thế giới game đầy màu sắc.');
insert into bosuutap(TenBoSuuTap) value('Khác');
insert into bosuutap(TenBoSuuTap) value('Sách');

/*end insert bo suu tap*/
/*insert hinhanh*/
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image1.jpg', '510KB', '3840x2160', 'Những Cuốn Sách', '8');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image2.jpg', '398KB', '1920x1080', 'Cánh đồng hoa tim tím', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image3.jpg', '319KB', '1920x1080', 'Vách núi sát biển', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image4-min.jpg', '446KB', '3840x2160', 'Xe Đạp', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image5.jpg', '484KB', '3840x2160', 'Từ điển', '8');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image6-min.jpg', '364KB', '3840x2160', 'Sách cũ', '8');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image7-min.jpg', '390KB', '3840x2160', 'Gấu Bông lạc lõng', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image8.jpg', '666KB', '3840x2160', 'Bản đồ', '8');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image9-min.jpg', '539KB', '3840x2160', 'Cà phê sách', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image10.jpg', '462KB', '3840x2160', 'Khúc gỗ tình yêu', '8');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image11.jpg', '705KB', '3840x2160', 'Tách cà phê màu đen', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image12.jpg', '415KB', '3840x2160', 'Tách trà ', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image13.jpg', '464KB', '3840x2160', 'Vòng tay hình sao', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image14.jpg', '443KB', '3840x2160', 'Hình nộm gỗ vuông', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image15.jpg', '452KB', '1920x1080', 'Núi tuyết', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image16.jpg', '291KB', '1920x1080', 'Hoàng hôn bên bờ hồ', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image17.jpg', '64.2KB', '1024x682', 'Cô gái với mái tóc đẹp', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image18.jpg', '155KB', '1920x1080', 'Biến khi bình minh', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image19.jpg', '452KB', '1920x1080', 'Thác nước mùa thu', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image20.jpg', '254KB', '1920x1080', 'Những chiếc đèn', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image21.jpg', '468KB', '1920x1080', 'Ngọn núi sát biển', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image22.jpg', '344KB', '1920x1080', '2 con cú dễ thương', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image23.jpg', '502KB', '1920x1080', 'Thành phố bên biển', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image24.jpg', '459KB', '1920x1080', 'Bầu trời sao đêm', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image25.jpg', '583KB', '1920x1080', 'Lối mòn trong rừng', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image26.jpg', '539KB', '3840x2400', 'Lối thoát hiểm', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image27.jpg', '286KB', '3840x2400', 'Quả bóng ước mơ', '7');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('image28.jpg', '400KB', '1920x1080', 'Chiếc thuyền cạnh bờ', '2');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('angel_christmas_reflections_statue_106588_3840x2160-min.jpg', '605KB', '3840x2160', 'Búp bê noen', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('assassins_creed_syndicate_jacob_frye_112077_3840x2160-min.jpg', '568KB', '3840x2160', 'Assassins creed', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('bengali_fire_sparks_holiday_118188_3840x2160-min.jpg', '645KB', '3840x2160', 'Pháo hoa', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('branches_garland_spruce_118627_3840x2160-min.jpg', '558KB', '3840x2160', 'Cây thông noen', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('bread_pastries_many_76629_3840x2160-min.jpg', '770KB', '3840x2160', 'Rổ bánh mì', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('button_help_keyboard_close-up_80023_3840x2160-min.jpg', '656KB', '3840x2160', 'Nút bấm help', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('cat_winter_fluffy_snow_99366_3840x2160-min.jpg', '595KB', '3840x2160', 'Chú mèo tuyết', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('christmas_art_toys_118381_3840x2160-min.jpg', '629KB', '3840x2160', 'Lịch noen', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('christmas_new_year_holiday_sweets_84982_3840x2160-min.jpg', '478KB', '3840x2160', 'Kẹo gừng', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('dog_cat_kitten_puppy_drawing_heart_96341_1920x1200.jpg', '79.4KB', '3840x2160', 'Mèo và chó', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('doves_couple_eiffel_tower_113598_3840x2160-min.jpg', '570KB', '3840x2160', 'Chim bồ câu', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('easter_bunny_rabbits_flowers_107676_3840x2160-min.jpg', '295KB', '3840x2160', 'Thỏ sứ lễ phục sinh', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('elephant_boy_river_130130_3840x2160-min.jpg', '492KB', '3840x2160', 'Cậu bé cưỡi voi', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('elephant_seal_friends_85440_3840x2160-min.jpg', '438KB', '3840x2160', 'Voi và hải cẩu', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('fireworks_celebration_explosion_101283_3840x2160-min.jpg', '444KB', '3840x2160', 'Pháo hoa đêm', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('gadget_tablet_smartphone_icons_touch_screen_99974_3840x2160-min.jpg', '545KB', '3840x2160', 'Công nghệ tương lai', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('gamepad_xbox_console_joystick_113510_3840x2160-min.jpg', '239KB', '3840x2160', 'Tay cầm Xbox', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('german_shepherd_dog_puppy_muzzle_108939_3840x2160-min.jpg', '536KB', '3840x2160', 'Cún con đen', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('god_of_war_kratos_sony_santa_monica_110295_3840x2160-min.jpg', '486KB', '3840x2160', 'Chiến thần Kratos', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('grilled_chicken_crispy_fried_70856_3840x2160-min.jpg', '579KB', '3840x2160', 'Gà quay thơm ngon', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('halloween_pumpkin_autumn_128570_3840x2160-min.jpg', '168KB', '3840x2160', 'Lễ hội ma', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('halloween_pumpkin_spooky_127836_3840x2160-min.jpg', '287KB', '3840x2160', 'Bí ngô lễ hội ma', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('holiday_roses_bouquet_cat_white_fluffy_93305_3840x2160-min.jpg', '382KB', '3840x2160', 'Mèo và hoa', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('imac_apple_computer_table_cup_notebook_109176_3840x2160-min.jpg', '157KB', '3840x2160', 'máy tính apple', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('jelly_dessert_berries_raspberries_blackberries_95052_3840x2160-min.jpg', '377KB', '3840x2160', 'Bánh râu tây', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('koala_baby_tree_eucalyptus_107755_3840x2160-min.jpg', '344KB', '3840x2160', 'Gấu túi', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('laptop_macbook_iphone_apple_journal_glasses_113949_3840x2160-min.jpg', '283KB', '3840x2160', 'laptop macbook', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('macaron_french_confection_dessert_98412_3840x2160-min.jpg', '314KB', '3840x2160', 'Bánh quy nhiều màu sắc', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('macbook_pro_apple_iphone_laptop_smartphone_office_notebook_108418_3840x2160-min.jpg', '223KB', '3840x2160', 'Macbook và cuốn ghi chú', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('mortal_kombat_scorpion_sub_zero_punch_ice_fire_97689_3840x2160-min.jpg', '305KB', '3840x2160', 'Mortal kombat', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('need_for_speed_rivals_nfs_rivals_need_for_speed_mclaren_p1_koenigsegg_97642_3840x2160-min.jpg', '251KB', '3840x2160', 'Đua xe', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('new_year_christmas_cat_card_98535_3840x2160-min.jpg', '381KB', '3840x2160', 'Mèo noen', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('panda_lesser_panda_red_panda_branch_rest_sleep_96729_3840x2160-min.jpg', '350KB', '3840x2160', 'Gấu mèo đỏ', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('pizza_tomatoes_olives_mushrooms_cheese_dish_leaves_food_93326_3840x2160-min.jpg', '332KB', '3840x2160', 'pizza cà chua phô mai', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('ps4_game_console_sony_playstation_4_99973_3840x2160-min.jpg', '316KB', '3840x2160', 'Máy chơi game ps4', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('phone_headphones_player_106009_3840x2160-min.jpg', '181KB', '3840x2160', 'Tai nghe xịn', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('resident_evil_umbrella_corporation_88974_3840x2160-min.jpg', '386KB', '3840x2160', 'resident_evi', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('saint_bernard_dog_kitten_puppy_grass_96291_1920x1200-min.jpg', '382KB', '3840x2160', 'Chó và mèo con', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('sennheiser_headphones_wire_bw_105493_3840x2160-min.jpg', '198KB', '3840x2160', 'Tai nghe', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('smite_hades_art_97643_3840x2160-min.jpg', '349KB', '3840x2160', 'Hades', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('sony_a7ii_iphone_lens_105959_3840x2160-min.jpg', '287KB', '3840x2160', 'Máy ảnh sony', '4');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('sparkler_hand_glare_129421_3840x2160-min.jpg', '264KB', '3840x2160', 'Pháo bông', '5');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('spices_seasonings_red_pepper_black_pepper_pepper_star_anise_onion_ginger_garlic_walnuts_bay_leaf_78738_3840x2160-min.jpg', '552KB', '3840x2160', 'Các loại gia vị', '3');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('star_wars_battlefront_electronic_arts_105865_3840x2160-min.jpg', '368KB', '3840x2160', 'Star war game', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('the_elder_scrolls_v_skyrim_rock_warrior_113984_3840x2160-min.jpg', '283KB', '3840x2160', 'Skyrim', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('the_witcher_3_wild_hunt_hearts_of_stone_105826_3840x2160-min.jpg', '372KB', '3840x2160', 'The witcher', '6');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('wolf_rock_precipice_predator_120088_1920x1200-min.jpg', '245KB', '3840x2160', 'Sói', '1');
INSERT INTO `webhinhanh`.`hinhanh` (`TenHinhAnh`, `KichCo`, `DoPhanGiai`, `MoTaHinhAnh`, `MaBoSuuTap`) VALUES ('zenit_retro_camera_photos_map_107245_3840x2160-min.jpg', '315KB', '3840x2160', 'Máy ảnh và ảnh', '4');
/*end insert hinhanh*/
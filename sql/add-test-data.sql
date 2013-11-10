insert into PRODUCT (product_id, product_type_id, name, description, price) values
  (1, 1, 'salami', 'super', '6,00'),
  (2, 1, 'kinkku', 'tarjous', '4,50'),
  (3, 2, 'coca-cola', 'perus', '1337,00');

insert into PRODUCT_TYPE (product_type_id, description) values
  (1, 'pizza'),
  (2, 'juoma'),
  (3, 'lisuke');

insert into USER (user_id, role_type_id, first, second, e-mail, phone) values
  (1, 4, 'Donald', 'Trump', 'D2daT@illuminati.gov', '555-1337'),
  (2, 2, 'Barax', 'Obeymah', 'yeswecan@hope.org', '555-944834673'),
  (3, 3, 'Obama', 'bin Einlager', 'niceguy@fedex.org', '0700-460266464'),
  (4, 1, 'Ebin', 'Maestro', 'skill@me.tru', '040-696243'),
  (5, 1, 'Kripp', 'arrian', 'kripp@poe.pro', '555-6659075455'),
  (6, 1, 'Mr', 'Zeus', 'god@olympos.gr', '555-463');

insert into ROLE_TYPE (role_type_id, description) values
  (1, 'customer'),
  (2, 'employee'),
  (3, 'delivery'),
  (4, 'admin');

insert into ORDER (order_id, user_id, address, deliver_time, total_price) values
  (1, 5, 'us and a', '2013-11-10', '1337,00'),
  (2, 6, 'mt. olympos greece', '2013-11-10', '5,00'),
  (3, 4, 'heaven', '2013-11-10', '6,00');

insert into CART (order_id, product_id, amount) values
  (1, 3, 100),
  (2, 2, 1),
  (3, 1, 1);

insert into CONTENT (product_id, material_id) values
  (1, 2),
  (1, 3),
  (2, 1),
  (2, 3);

insert into MATERIAL (material_id, product_type_id, description, price) values
  (1, 3, 'kinkku', '2,50'),
  (2, 3, 'salami', '3,00'),
  (3, 3, 'juusto', '1,75');

insert into product_types values
  (1, 'pizza'),
  (2, 'juoma'),
  (3, 'lisuke');

insert into products values
  (1, 1, 'salami', 'super', 6.00),
  (2, 1, 'kinkku', 'tarjous', 4.50),
  (3, 2, 'coca-cola', 'perus', 1337.00);


insert into materials values
  (1, 3, 'kinkku', 2.50),
  (2, 3, 'salami', 3.00),
  (3, 3, 'juusto', 1.75);

insert into role_types values
  (1, 'customer'),
  (2, 'employee'),
  (3, 'delivery'),
  (4, 'admin');

insert into users values
  (1, 4, 'Donald', 'Trump', 'D2daT@illuminati.gov', '555-1337'),
  (2, 2, 'Barax', 'Obeymah', 'yeswecan@hope.org', '555-944834673'),
  (3, 3, 'Obama', 'bin Einlager', 'niceguy@fedex.org', '0700-460266464'),
  (4, 1, 'Ebin', 'Maestro', 'skill@me.tru', '040-696243'),
  (5, 1, 'Kripp', 'arrian', 'kripp@poe.pro', '555-6659075455'),
  (6, 1, 'Mr', 'Zeus', 'god@olympos.gr', '555-463');

insert into orders values
  (1, 5, 'us and a', '2013-11-10', 1337.00),
  (2, 6, 'mt. olympos greece', '2013-11-10', 5.00),
  (3, 4, 'heaven', '2013-11-10', 6.00);

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
  (1, 4, 'Donald', 'Trump', 'D2daT@illuminati.gov', '555-1337', md5('pw1'), substring(md5(random()::TEXT) from 1 for 8)),
  (2, 2, 'Barax', 'Obeymah', 'yeswecan@hope.org', '555-944834673', md5('pw2'), substring(md5(random()::TEXT) from 1 for 8)),
  (3, 3, 'Obama', 'bin Einlager', 'niceguy@fedex.org', '0700-460266464', md5('pw3'), substring(md5(random()::TEXT) from 1 for 8)),
  (4, 1, 'Ebin', 'Maestro', 'skill@me.tru', '040-696243', md5('pw4'), substring(md5(random()::TEXT) from 1 for 8)),
  (5, 1, 'Kripp', 'arrian', 'kripp@poe.pro', '555-6659075455', md5('pw5'), substring(md5(random()::TEXT) from 1 for 8)),
  (6, 1, 'Mr', 'Zeus', 'god@olympos.gr', '555-463', md5('pw1'), substring(md5(random()::TEXT) from 1 for 8));

UPDATE users SET pw_hash=md5('pw1' || users.pw_salt) WHERE id=1;
UPDATE users SET pw_hash=md5('pw2' || users.pw_salt) WHERE id=2;
UPDATE users SET pw_hash=md5('pw3' || users.pw_salt) WHERE id=3;
UPDATE users SET pw_hash=md5('pw4' || users.pw_salt) WHERE id=4;
UPDATE users SET pw_hash=md5('pw5' || users.pw_salt) WHERE id=5;
UPDATE users SET pw_hash=md5('pw6' || users.pw_salt) WHERE id=6;

insert into orders values
  (1, 5, 'us and a', '2013-11-10', 1337.00),
  (2, 6, 'mt. olympos greece', '2013-11-10', 5.00),
  (3, 4, 'heaven', '2013-11-10', 6.00);

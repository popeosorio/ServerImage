

CREATE TABLE IF NOT EXISTS 
usuarios (
  idusuario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario varchar(20) NOT NULL,
  password varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO usuarios VALUES
(1, 'test', 'test');


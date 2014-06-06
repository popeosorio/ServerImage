

CREATE TABLE IF NOT EXISTS imagenes (
  imageID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(30) DEFAULT NULL,
  description varchar(30) DEFAULT NULL,
  directory varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;



INSERT INTO imagenes VALUES
(6, 'prueba', 'Enter your comments here...', 'uploads/yii.png'),
(7, 'saf', 'Enter your comments here...', 'uploads/yii.png'),
(8, 'asdasdasdasdasdasda', 'Enter your comments here...', 'uploads/logo-rslatinos.png');


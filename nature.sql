CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  full_name VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  gender ENUM('male', 'female') NOT NULL,
  residence VARCHAR(100) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE cities (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE properties (
  id INT NOT NULL AUTO_INCREMENT,
  city_id INT NOT NULL,
  name VARCHAR(100) NOT NULL,
  address VARCHAR(255) NOT NULL,
  description LONGTEXT NOT NULL,
  gender ENUM('male', 'female', 'unisex') NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(city_id) REFERENCES cities(id)
);

CREATE TABLE testimonials (
  id INT NOT NULL AUTO_INCREMENT,
  property_id INT NOT NULL,
  user_name VARCHAR(100) NOT NULL,
  content LONGTEXT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(property_id) REFERENCES properties(id)
);

CREATE TABLE interested_users_properties (
  id INT NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  property_id INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(user_id) REFERENCES users(id),
  FOREIGN KEY(property_id) REFERENCES properties(id)
);
INSERT INTO 
  `cities` 
    (`id`, `name`) 
  VALUES
    (1, 'Delhi'),
    (2, 'Mumbai'),
    (3, 'Bengaluru'),
    (4, 'Hyderabad');

INSERT INTO 
  `properties` 
    (`id`, `city_id`, `name`, `address`, `description`, `gender`) 
  VALUES
    (1, 1, 'Chintan\'s Environmental Research and Action Group', 'C-14, Second Floor, Block C, Lajpat Nagar III, Lajpat Nagar, New Delhi, Delhi 110024', 'Chintan reduces waste and consumption, manages solid and electronic waste and advocates around materials, waste and consumption. It uses waste as a tool to fight poverty, child labour gender based violence and exclusion and climate change, while creating green livelihoods. Chintan pushes back and combats unsustainable consumption. Its work directly supports the UNs Sustainable Development Goals.', 'unisex'),
    (2, 1, 'Rahi NGO', 'House No.51, Munshi Ram Colony, New Delhi, Delhi 110009', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (3, 1, 'MIW Foundation NGO', '51 Ground Floor, Aggarwal City Mall, Chairman Office, Near Chunmun Mall, Rani Bagh, Pitampura, New Delhi, Delhi 110034', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (4, 1, 'Nitya Foundation NGO', 'Address - H-28, Om Complex, 1st Floor, Laxmi Nagar, Delhi, 110092', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (5, 2, 'Abhilasha Foundation NGO', 'Laxmi Chhaya Bungalow, Plot No.27, RSC 11, Gorai 2, Borivali West, Mumbai, Maharashtra 400091', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (6, 2, 'Ashadeep Association NGO', 'Shakti Apartments, Shakti Centre B-002, Cardinal Gracious Road, Chakala, Andheri, Mumbai', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (7, 3, 'Aahwahan Foundation', 'Building No-40, 3rd Floor, Jayanagara 9th Block, Jayanagar, Bengaluru, Karnataka 560069', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (8, 3, 'Vidyaranya NGO', 'Municipal No.34, 3rd Floor Royal Park Apartments, Unit, 15, Park Rd, Tasker Town, Shivaji Nagar, Bengaluru, Karnataka 560051', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (9, 4, 'Narayan Seva Sansthan', '4-7-122, Leelavathi Bhavan, Nrsantoshi Mata Temple, Esamia Bazar, Esamia Bazar koti, Hyderabad, Telangana 500027', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex'),
    (10, 4, 'Youngistaan Foundation', 'Badruka Enclave, Flat number A 104, Road No. 12, above Andhra Bank, Nandi Nagar, Banjara Hills, Hyderabad, Telangana 500034', 'A non-governmental organization NGO is an organization that generally is formed independent from government.They are typically nonprofit entities, and many of them are active in humanitarianism or the social sciences; they can also include clubs and associations that provide services to their members and others. Surveys indicate that NGOs have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.', 'unisex');
    
    
INSERT INTO 
  `testimonials` 
    (`id`, `property_id`, `user_name`, `content`) 
  VALUES
    (1, 1, 'B.K.Malawat', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (2, 1, 'Karan Johar', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (3, 1, 'Zoya Akhtar', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (4, 2, 'Farhan Akhtar', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (5, 2, 'Anurag Kashyap', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (6, 3, 'Mira Nair', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (7, 3, 'Meghna Gulzar', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (8, 4, 'Farah Khan', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (9, 4, 'Rajkumar Hirani', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (10, 5, 'Sanjay Leela Bhansali', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (11, 6, 'Mira Nair', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (12, 7, 'Meghna Gulzar', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (13, 8, 'Farah Khan', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (14, 8, 'Rajkumar Hirani', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.'),
    (15, 9, 'Sanjay Leela Bhansali', 'It gives me immense pleasure to share my thoughts about Abhilasha Foundation. The idea to have a realistic NGO strike to me when I came across with underprivileged children who were deprived of basic needs like education, health care and nutrition. In short duration Abhilasha has done tremendous work for upliftment of underprivileged children.');

INSERT INTO 
  `users` 
    (`id`, `email`, `password`, `full_name`, `phone`, `gender`, `residence`) 
  VALUES
    (1, 'ram@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'Ram', '0987654321', 'male', 'NITD'),
    (2, 'ravi@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'ravi', '1234567890', 'male', 'NITJ'),
    (3, 'bheem@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'bheem', '099887766', 'male', 'Chandigarh University'),
    (4, 'emma@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'emma', '9876543210', 'female', 'Delhi University');

INSERT INTO 
  `interested_users_properties` 
    (`id`, `user_id`, `property_id`) 
  VALUES
    (1, 1, 1),
    (2, 1, 2),
    (3, 1, 5),
    (4, 2, 1),
    (5, 2, 5),
    (6, 3, 1),
    (7, 3, 2),
    (8, 3, 5),
    (9, 4, 2),
    (10, 4, 3),
    (11, 4, 4);

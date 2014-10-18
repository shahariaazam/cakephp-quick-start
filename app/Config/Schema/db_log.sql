-- shaharia 19 Oct 2014 --
ALTER TABLE  `profiles` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `cakephp-quick-start`.`users` (
`id`
) ON DELETE CASCADE ON UPDATE CASCADE ;
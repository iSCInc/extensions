--
-- This tables tracks the most recent login action for a user
-- user_id is an effective foreign key to the user table
--
CREATE TABLE /*$wgDBprefix*/accountaudit_login (
  -- Key to user_id
  aa_user int unsigned NOT NULL,
  aa_method tinyint unsigned NOT NULL DEFAULT 0,

  -- This is a timestamp which is updated when a user logs in
  aa_lastlogin varbinary(14) default null,

  PRIMARY KEY (aa_user, aa_method),
  INDEX /*i*/aa_lastlogin (aa_lastlogin)
) /*$wgDBTableOptions*/;

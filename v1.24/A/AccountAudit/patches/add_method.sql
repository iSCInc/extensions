ALTER TABLE /*$wgDBprefix*/accountaudit_login
    ADD COLUMN aa_method tinyint unsigned NOT NULL DEFAULT 0 AFTER aa_user,
    DROP PRIMARY KEY,
    ADD PRIMARY KEY (aa_user, aa_method)
;
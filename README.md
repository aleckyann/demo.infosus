# infosus


##Atualizações no banco de dados:

ALTER TABLE `pacientes` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `acs`, ADD `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_at`, ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `updated_at`;



# infosus


##Atualizações no banco de dados:

ALTER TABLE `pacientes` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `acs`, ADD `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_at`, ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `updated_at`;


#produtos
ALTER TABLE `produtos` ADD `produto_lote` VARCHAR(255) NOT NULL AFTER `produto_quantidade_minima`, ADD `produto_validade` DATE NULL DEFAULT NULL AFTER `produto_lote`, ADD `produto_aviso_validade` INT NULL DEFAULT NULL AFTER `produto_validade`;
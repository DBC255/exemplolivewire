create database laravel

use laravel

CREATE TABLE IF NOT EXISTS `laravel`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci

CREATE TABLE IF NOT EXISTS `laravel`.`produtos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  `qtd_estoque` INT(11) NOT NULL,
  `qtd_minima` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci

CREATE TABLE IF NOT EXISTS `laravel`.`movimentacaos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quantidade` INT(11) NOT NULL,
  `data_movimentacao` DATE NOT NULL,
  `tipo` ENUM('entrada', 'saida') NOT NULL,
  `produto_id` BIGINT(20) UNSIGNED NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `movimentacaos_produto_id_foreign` (`produto_id` ASC) VISIBLE,
  INDEX `movimentacaos_user_id_foreign` (`user_id` ASC) VISIBLE,
  CONSTRAINT `movimentacaos_produto_id_foreign`
    FOREIGN KEY (`produto_id`)
    REFERENCES `laravel`.`produtos` (`id`),
  CONSTRAINT `movimentacaos_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `laravel`.`users` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci

INSERT INTO `laravel`.`users`
(
`name`,
`email`,
`password`,
)
VALUES
(
'Admin',
'admin@senai.br',
'123'
);

INSERT INTO `laravel`.`produtos`
(
`nome`,
`valor`,
`qtd_estoque`,
`qtd_minima`,
)
VALUES
(
martelo
12.9
0,
10,
);

INSERT INTO `laravel`.`produtos`
(
`nome`,
`valor`,
`qtd_estoque`,
`qtd_minima`,
)
VALUES
(
furadeira
12.9
0,
10,
);

INSERT INTO `laravel`.`produtos`
(
`nome`,
`valor`,
`qtd_estoque`,
`qtd_minima`,
)
VALUES
(
parafusos(50)
12.9
0,
10,
);
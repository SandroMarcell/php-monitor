<?php

/*
 * Copyright 2016 Sandro Marcell <smarcell@mail.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

/* Intervalo de atualizacao das informacoes na pagina index (padrao 1 minuto e meio) */
define('INTERVALO', 60 * 1500);

/*
 * Valor com a maior latencia permitida antes de exibir o status como "warning"
 * (padrao 100ms)
 */
define('ATENCAO', 100);

/* 
 * Hosts que serao monitorados
 * Obs.: Certifique-se que estes tenham permissao para responder a requisicoes do tipo ICMP
 *       se for o caso.
 */
$hosts = array(
		array(
			'host'  => '192.168.1.1',
			'porta' => 3128,
			'desc'  => 'Proxy Squid'
		),
		array(
			'host'  => '192.168.1.2',
			'porta' => 445,
			'desc'  => 'Servidor Samba'
		),
		array(
			'host'  => '192.168.1.3',
			'porta' => 631,
			'desc'  => 'Servidor de impress&atilde;o'
		),
		array(
			'host'  => '192.168.1.254',
			'porta' => 22,
			'desc'  => 'Gateway'
		),
);

?>

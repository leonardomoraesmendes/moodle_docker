<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_paypal', language 'pt_br', branch 'MOODLE_37_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuir papel';
$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'O endereço de email de sua conta de negócios PayPal';
$string['cost'] = 'Preço da inscrição';
$string['costerror'] = 'O custo de inscrição não é numérico';
$string['costorkey'] = 'Por favor escolha um dos seguintes métodos de inscrição.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione papel que deseja inscrever usuários durante inscrição PayPal';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem ser inscritos apenas até esta data.';
$string['enrolenddaterror'] = 'A data final de inscrições não pode ser anterior a data de início';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Intervalo de tempo padrão em que a inscrição será válida. Se configurada como zero a inscrição terá duração ilimitada por padrão.';
$string['enrolperiod_help'] = 'Duração de tempo que a inscrição é válida, iniciando no momento que o usuário é inscrito. Caso desabilitado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários só podem ser inscritos a partir desta data.';
$string['expiredaction'] = 'Ação ao término da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser realizada quando a inscrição do usuário terminar. Por favor, observe que alguns dados e configurações do usuário são removidos do curso durante a desinscrição no curso.';
$string['mailadmins'] = 'Avisar admin';
$string['mailstudents'] = 'Avisar estudantes';
$string['mailteachers'] = 'Avisar professores';
$string['messageprovider:paypal_enrolment'] = 'Mensagem de inscrição via PayPal';
$string['nocost'] = 'Não há custos associados com a inscrição neste curso!';
$string['paypalaccepted'] = 'Aceitamos pagamentos com PayPal';
$string['paypal:config'] = 'Configurar as instâncias da inscrição PayPal';
$string['paypal:manage'] = 'Gerenciar usuários inscritos';
$string['paypal:unenrol'] = 'Desinscrever usuários do curso';
$string['paypal:unenrolself'] = 'Desinscrever-se do curso';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'O módulo Paypal permite configurar os cursos pagos. Se o preço de qualquer curso for zero, então os estudantes não serão convidados a pagar para obter acesso. Há um preço global que você define aqui como padrão para todo o site. mas nas configurações do curso você pode definir um preço para cada curso individualmente . O preço do curso sobrepõe o do site.';
$string['sendpaymentbutton'] = 'Pagamento via Paypal';
$string['status'] = 'Permitir inscrições PayPal';
$string['status_desc'] = 'Permitir a inscrição em um curso utilizando PayPal por padrão.';
$string['unenrolselfconfirm'] = 'Você realmente deseja retirar sua inscrição do curso "{$a}" ?';

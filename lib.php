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
defined('MOODLE_INTERNAL') || die;

global $CFG;
require_once($CFG->dirroot . '/question/editlib.php');

function local_enemyquestions_question_bank_column_types($questionbankview) {
    return array(
                'enemies' => new local_enemyquestions_question_bank_column($questionbankview),
                'isenemy' => new local_enemyquestions_existing_enemy_column($questionbankview)
            );
}

function local_enemyquestions_get_question_bank_search_conditions($caller) {
    return array(
        new local_enemyquestions_question_bank_search_condition($caller)
    );
}

// case FEATURE_BACKUP_MOODLE2:          return true;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transform extends CI_Controller {

	const KEYBOARD_ROWS = [
		'1234567890',
		'qwertyuiop',
		'asdfghjkl;',
		'zxcvbnm,./'
	]; 

    public function index() {
        $this->load->view('transform-view');
    }

    public function transformText() {
        $transforms_input = $this->input->post('transforms');
        $text_input = $this->input->post('text');

        $transforms = explode(',', $transforms_input);
        $transformed_text = $text_input;

        foreach ($transforms as $transform) {
            if ($transform === 'H') {
                $transformed_text = $this->applyHorizontalFlip($transformed_text);
            } elseif ($transform === 'V') {
                $transformed_text = $this->applyVerticalFlip($transformed_text);
            }
        }

        $response = array('transformed_text' => $transformed_text);
		header('Content-Type: application/json');
        echo json_encode($response);
    }

    private function applyHorizontalFlip($text) {
        $flipped_text = '';
        foreach (str_split($text) as $char) {
            $found = false;
            foreach (self::KEYBOARD_ROWS as $row) {
                $pos = strpos($row, $char);
                if ($pos !== false) {
                    $flipped_text .= $row[strlen($row) - $pos - 1];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $flipped_text .= $char;
            }
        }

        return $flipped_text;
    }

    private function applyVerticalFlip($text) {
        $flipped_text = '';
        foreach (str_split($text) as $char) {
            $found = false;
            foreach (self::KEYBOARD_ROWS as $row) {
                $pos = strpos($row, $char);
                if ($pos !== false) {
					$flipped_text = 'BELUM SELESAI';
                }
            }
            if (!$found) {
                $flipped_text .= $char;
            }
        }

        return $flipped_text;
    }
}
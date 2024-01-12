<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatBotController extends Controller
{
    public function send(Request $request)
    {
        $result = OpenAI::completions()->create([
            'max_tokens' => 100,
            'model' => 'gpt-3.5-turbo-1106',
            'prompt' => $request->input,
        ]);

        $response = array_reduce(
            $result->toArray()['choices'],
            fn (string $result, array $choice) => $result.$choice['text'],
            ''
        );

        return $response;
    }
}

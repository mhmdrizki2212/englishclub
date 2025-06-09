<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PlacementTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama untuk menghindari duplikat saat seeding ulang
        DB::table('placement_tests')->delete();

        DB::table('placement_tests')->insert([
            // --- Grammar Questions ---
            [
                'tags' => 'Grammar',
                'soal' => 'She ___ a beautiful song at the concert last night.',
                'pilihan1' => 'sing', 'pilihan2' => 'sings', 'pilihan3' => 'sang', 'pilihan4' => 'sung',
                'jawaban' => 'C', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Grammar',
                'soal' => 'If I ___ you, I would study harder for the exam.',
                'pilihan1' => 'am', 'pilihan2' => 'was', 'pilihan3' => 'were', 'pilihan4' => 'be',
                'jawaban' => 'C', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Grammar',
                'soal' => 'The book is on the table, ___ it?',
                'pilihan1' => 'is it', 'pilihan2' => 'is not it', 'pilihan3' => 'isn\'t it', 'pilihan4' => 'it is',
                'jawaban' => 'C', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // --- Vocabulary Questions ---
            [
                'tags' => 'Vocabulary',
                'soal' => 'The word "ephemeral" means...',
                'pilihan1' => 'long-lasting', 'pilihan2' => 'short-lived', 'pilihan3' => 'beautiful', 'pilihan4' => 'complex',
                'jawaban' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Vocabulary',
                'soal' => 'A person who is "meticulous" is very...',
                'pilihan1' => 'careless', 'pilihan2' => 'brave', 'pilihan3' => 'careful and precise', 'pilihan4' => 'loud',
                'jawaban' => 'C', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Vocabulary',
                'soal' => 'To "ameliorate" a situation means to...',
                'pilihan1' => 'make it worse', 'pilihan2' => 'make it better', 'pilihan3' => 'ignore it', 'pilihan4' => 'analyze it',
                'jawaban' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // --- Reading Comprehension Questions ---
            [
                'tags' => 'Reading Comprehension',
                'soal' => 'Read the passage: "The sun is a star at the center of the Solar System. It is a nearly perfect sphere of hot plasma." What is the main subject of the passage?',
                'pilihan1' => 'The Solar System', 'pilihan2' => 'Plasma', 'pilihan3' => 'Stars', 'pilihan4' => 'The Sun',
                'jawaban' => 'D', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Reading Comprehension',
                'soal' => 'Based on the passage from the previous question, the sun is described as a...',
                'pilihan1' => 'perfect cube', 'pilihan2' => 'sphere of hot plasma', 'pilihan3' => 'cold gas giant', 'pilihan4' => 'small rock',
                'jawaban' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Reading Comprehension',
                'soal' => 'What does "pragmatic" mean?',
                'pilihan1' => 'Idealistic and impractical', 'pilihan2' => 'Dealing with things sensibly and realistically', 'pilihan3' => 'Lazy and unmotivated', 'pilihan4' => 'Angry and aggressive',
                'jawaban' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'tags' => 'Grammar',
                'soal' => 'He has been working here ___ 2010.',
                'pilihan1' => 'for', 'pilihan2' => 'since', 'pilihan3' => 'at', 'pilihan4' => 'in',
                'jawaban' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

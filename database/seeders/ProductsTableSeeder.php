<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Razer DeathAdder Essential Gaming Mouse: 6400 DPI Optical Sensor - 5 Programmable Buttons - Mechanical Switches - Rubber Side Grips - Mercury White ',
            'description' => "The Razer DeathAdder essential retains the classic ergonomic form that's been a hallmark of previous Razer DeathAdder generations. Its sleek and distinct body is designed for comfort, allowing you to maintain high levels of performance throughout long gaming marathons, so you'll never falter in the heat of battle. ",
            'price' => 24.70,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "Logitech G502 HERO High Performance Wired Gaming Mouse, HERO 25K Sensor, 25,600 DPI, RGB, Adjustable Weights, 11 Programmable Buttons, On-Board Memory, PC / Mac ",
            'description' => "Logitech updated its iconic G502 gaming mouse to deliver even higher performance and more precise functionality than ever. Logitech G502 Hero high Performance Gaming mouse features the next generation Hero 16K Optical sensor, The highest performing and most efficient gaming sensor Logitech has ever made. An all-New lens and an updated tracking algorithm deliver ultra-precise tracking with no acceleration, smoothing, or filtering over the entire DPI range. Now, customize RGB mouse lighting to match your style and environment or sync to other Logitech G products. No matter your gaming style, It's easy to tweak G502 Hero to match your requirements, with custom profiles for your games, adjustable sensitivity from 200 up to 16, 000 DPI, and a tunable weight system that allows for tuning and balancing of up to five 3. 6G weights for just the right balance and feel. ",
            'price' => 47.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "Logitech G203 Wired Gaming Mouse, 8,000 DPI, Rainbow Optical Effect LIGHTSYNC RGB, 6 Programmable Buttons, On-Board Memory, Screen Mapping, PC/Mac Computer and Laptop Compatible - Black ",
            'description' => "G203 Lightsync is ready to play with an 8, 000 DPI sensor and customizable, vibrant Lightsync RGB. LIGHTSYNC RGB can be customized with color wave effects or patterns across - 16. 8 million colors to suit your play style, setup, and mood. A classic 6-button design gets you right into the game and can be programmed to simplify tasks. G203 is designed to maximize the fun in your game. Lightsync RGB can be customized with color wave effects or patterns across - 16. 8 million colors to suit your play style, setup, and mood. Microprocessor: 32-bit ARM. ",
            'price' => 28.90,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "Razer Viper Mini Ultralight Gaming Mouse: Fastest Gaming Switches - 8500 DPI Optical Sensor - Chroma RGB Underglow Lighting - 6 Programmable Buttons - Drag-Free Cord - Classic Black ",
            'description' => "Experience hard-hitting performance with our lightest mouse ever created—a lean ultra-lightweight build that makes control effortless Featuring cutting-edge optical mouse switches a precise8 500 DPI sensor and Razer Speedflex Cable for supreme accuracy and speed. ",
            'price' => 29.85,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "Logitech G305 LIGHTSPEED Wireless Gaming Mouse, Hero 12K Sensor, 12,000 DPI, Lightweight, 6 Programmable Buttons, 250h Battery Life, On-Board Memory, PC/Mac - Black ",
            'description' => "Play advanced without wires or limits. logitech G G305 LIGHTSPEED is a wireless gaming mouse designed for high-performance in your favorite PC games. G305 features the next-gen logitech G HERO optical sensor with 200 to 12,000 DPI sensitivity for competition-level accuracy. LIGHTSPEED wireless technology gives you super-fast 1 millisecond performance that’s as fast as wired. With incredible power-efficiency, G305 stays powered and ready to play for up to 250 hours on a single included AA battery. Play anywhere with an ultra-portable, lightweight gaming mouse that weighs in at only 99 grams, is easy to take with you, and has built-in storage for the included USB wireless receiver. Use logitech G Gaming Software to quickly program 6 buttons with instant multi-action commands, DPI settings and more. G305 is the Lightspeed wireless mouse for all. ",
            'price' => 39.00,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "Razer Mamba Wireless Gaming Mouse: 16,000 DPI Optical Sensor - Chroma RGB Lighting - 7 Programmable Buttons - Mechanical Switches - Up to 50 Hr Battery Life ",
            'description' => "The Razer Mamba Wireless features battery life of up to 50 hours on a single charge. Enjoy enhanced tracking accuracy with our acclaimed Razer 5G Advanced Optical Sensor featuring true 16,000 DPI. Equipped with Razer Mechanical Mouse Switches, experience extended durability of up to 50 million clicks. Get more control with 7 programmable buttons through Razer Synapse 3, and save up to 5 profiles to your mouse with on-board memory. ",
            'price' => 43.73,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "SteelSeries Rival 3 Gaming Mouse - 8,500 CPI TrueMove Core Optical Sensor - 6 Programmable Buttons - Split Trigger Buttons - Brilliant Prism RGB Lighting",
            'description' => "The rival 3 gaming mouse has the best performance in its class thanks to a tournament-grade true move core optical gaming sensor which is custom-engineered in collaboration with industry-leading sensor manufacturer pixart hyper-durable materials the lifespan of the mouse which is rated for 60 million clicks in a lightweight build a redesigned RGB system provides the brightest dynamic lighting on any steel series mouse making the rival 3 a standout in both style and performance. ",
            'price' => 24.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "SteelSeries Apex 3 RGB Gaming Keyboard – 10-Zone RGB Illumination – IP32 Water Resistant – Premium Magnetic Wrist Rest (Whisper Quiet Gaming Switch)",
            'description' => "The apex 3 is your first step into next level gaming. Built from the ground up with intuitive gaming-focused features like water resistance, 10-zone RGB, whisper quiet gaming switches, and gaming grade anti-ghosting, the apex 3 has just what you need to outshine, outperform, and outlast the competition.4 ",
            'price' => 38.95,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "CORSAIR K55 RGB PRO - Dynamic RGB Backlighting - Six Macro Keys with Elgato Stream Deck Software Integration - IP42 Dust and Spill Resistant - Detachable Palm Rest - Dedicated Media and Volume Keys",
            'description' => "The CORSAIR K55 RGB PRO Gaming Keyboard lights up your desktop with five-zone dynamic RGB backlighting and powers up your gameplay with six easy to set up dedicated macro keys. The K55 RGB PRO is certified for IP42 dust and spill-resistance to stand up to wear, tear, and more, with a detachable palm rest to ensure all-day comfort, win after win. ",
            'price' => 49.88,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => "Razer Cynosa Chroma Gaming Keyboard: Individually Backlit RGB Keys - Spill-Resistant Design - Programmable Macro Functionality - Quiet & Cushioned",
            'description' => "The Razer Cynosa Chroma, the best-selling gaming membrane keyboard in the US (Source: The NPD Group, Inc., U.S. Retail Tracking Service, Keyboards, Non-mechanical keyboard, Gaming Designed Based on dollar sales, Jan.- Dec. 2019),features all the essentials a gamer needs. With soft cushioned, individually programmable backlit keys powered by Razer Chroma—and a spill-resistant design that keeps your keyboard safe—the Cynosa Chroma provides the best performance within its category. ",
            'price' => 42.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

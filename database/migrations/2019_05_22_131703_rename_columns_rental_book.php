<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsRentalBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rental_books', function (Blueprint $table) {
            $table->renameColumn('id_user', 'renter_id');
            $table->renameColumn('id_book', 'book_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rental_books', function (Blueprint $table) {
            $table->renameColumn('renter_id', 'id_user');
            $table->renameColumn('book_id', 'id_book');
        });
    }
}

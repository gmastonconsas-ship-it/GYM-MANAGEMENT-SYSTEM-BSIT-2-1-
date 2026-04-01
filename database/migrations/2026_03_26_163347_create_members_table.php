public function up(): void
{
    Schema::create('members', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone');
        $table->string('plan_type');
        $table->string('payment_status');
        $table->string('status')->default('Active'); // <--- DAGDAG MO ITO
        $table->timestamps();
    });
}
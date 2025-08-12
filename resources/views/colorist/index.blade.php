@extends('layouts.main')
@section('content')
    <section class="flex items-center justify-center min-h-screen p-8 bg-gray-50">
        <div class="w-full max-w-2xl p-8 bg-white shadow-2xl rounded-3xl">

            <!-- Клиент -->
            <div class="flex items-center gap-6 mb-8">
                <img src="{{ asset('images/calk/Female.png') }}" alt="Клиент"
                    class="object-cover w-20 h-20 rounded-full shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800">Анна Петрова</h2>
            </div>

            <!-- Краситель -->
            <div class="p-6 mb-6 shadow-inner bg-gray-50 rounded-2xl">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Краситель</h3>
                <div class="grid grid-cols-4 gap-4">
                    <input type="number" placeholder="Грамм" class="input">
                    <select class="input">
                        <option>Artisto</option>
                        <option>Bouticle</option>
                        <option>Добавить новый</option>
                    </select>
                    <input type="number" placeholder="Цена/г" class="input">
                </div>
            </div>

            <!-- Оксидант -->
            <div class="p-6 mb-6 shadow-inner bg-gray-50 rounded-2xl">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Оксидант</h3>
                <div class="grid grid-cols-4 gap-4">
                    <input type="number" placeholder="Грамм" class="input">
                    <select class="input">
                        <option>3%</option>
                        <option>6%</option>
                        <option>9%</option>
                        <option>Добавить новый</option>

                    </select>
                    <select class="input">
                        <option>Artisto</option>
                        <option>Bouticle</option>
                        <option>Добавить новый</option>

                    </select>
                    <input type="number" placeholder="Цена/г" class="input">
                </div>
            </div>

            <!-- Шампунь -->
            <div class="p-6 mb-6 shadow-inner bg-gray-50 rounded-2xl">
                <h3 class="mb-4 text-xl font-semibold text-gray-700">Шампунь</h3>
                <div class="grid grid-cols-4 gap-4">
                    <input type="number" placeholder="Грамм" class="input">
                    <select class="input">
                        <option>Artisto</option>
                        <option>Bouticle</option>
                        <option>Mantianyou</option>
                        <option>Добавить новый</option>

                    </select>
                    <input type="number" placeholder="Цена/г" class="input">
                </div>
            </div>

            <!-- Итог -->
            <div class="p-6 text-center shadow-lg bg-gradient-to-r from-pink-200 to-purple-300 rounded-2xl">
                <p class="text-lg font-medium text-gray-800">Общая стоимость</p>
                <h3 class="text-4xl font-bold text-gray-900" id="total">0₸</h3>
            </div>

        </div>
    </section>

    <style>
        .input {
            border-radius: 12px;
            padding: 0.6rem 1rem;
            border: 1px solid #e0e0e0;
            background: white;
            outline: none;
            transition: 0.2s;
        }

        .input:focus {
            border-color: #d9779f;
            box-shadow: 0 0 0 3px rgba(217, 119, 159, 0.3);
        }
    </style>

    <script>
        function calculateTotal() {
            let total = 0;

            // Находим все блоки, где есть граммы и цена
            document.querySelectorAll('.grams').forEach((gramsInput, index) => {
                const priceInput = document.querySelectorAll('.price')[index];
                const grams = parseFloat(gramsInput.value) || 0;
                const price = parseFloat(priceInput?.value) || 0;
                total += grams * price;
            });

            document.getElementById('total').textContent = total.toLocaleString('ru-RU') + '₸';
        }

        // Вешаем обработчики на все инпуты
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', calculateTotal);
        });
    </script>
@endsection

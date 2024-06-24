@antlers

<head>
    {{ captcha:head }}
</head>

{{ form:contact }}

<body>
    <div class="flex flex-col gap-4 text-black">

        {{ if success }}
        <div class="bg-green-300 text-white p-2">
            {{ success }}
        </div>

        {{ /if }}

        <div class="flex flex-col md:flex-row gap-4 w-full">
            <div class="md:w-1/2 flex flex-col">
                <input type="text" name="first_name" id="first_name" minlength="2" maxlength="32" pattern="[A-Za-z\s]{1,32}" title="Nombres" class="w-full h-12 p-4 text-black focus:outline-none focus:border-lightGray focus:ring-1 focus:ring-lightGray invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 rounded-2xl bg-slate-200" placeholder="Nombres" />

                {{ if error:first_name }}
                <span class="inline-block text-pink-500">
                    Este campo no puede estar vacío, e.g. John
                </span>
                {{ /if }}

            </div>
            <div class="md:w-1/2 flex flex-col">
                <input type="text" name="lastName" id="lastName" minlength="2" maxlength="32" pattern="[A-Za-z]{1,32}" class="w-full h-12 p-4 text-black focus:outline-none focus:border-lightGray focus:ring-1 focus:ring-lightGray invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 rounded-2xl bg-slate-200" placeholder="Apellidos" />


                {{ if errors }}
                <span class="inline-block text-pink-500">
                    Este campo no puede estar vacío, e.g. Doe
                </span>
                {{ /if }}

            </div>
        </div>

        <div class="w-full flex flex-col">
            <input type="email" name="email" id="email" minlength="4" class="w-full h-12 p-4 text-black focus:outline-none focus:border-lightGray focus:ring-1 focus:ring-lightGray invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 rounded-2xl bg-slate-200" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Correo electrónico" />


            {{ if errors }}
            <span class="inline-block text-pink-500">
                Este campo no puede estar vacío, e.g. correo@ejemplo.com
            </span>
            {{ /if }}

        </div>

        <div class="w-full flex flex-col">
            <input type="tel" name="phone" id="phone" inputmode="numeric" minlength="9" maxlength="12" class="w-full h-12 p-4 text-black focus:outline-none focus:border-lightGray focus:ring-1 focus:ring-lightGray invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 rounded-2xl bg-slate-200" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="Número telefónico" />


            {{ if errors }}
            <span class="inline-block text-pink-500">
                Este campo no puede estar vacío, e.g. 1234567890
            </span>
            {{ /if }}

        </div>
        <div class="w-full flex flex-col">
            <textarea name="note" id="note" minlength="10" class="bg-[F5F5F5] w-full min-h-40 p-4 resize-none text-black focus:outline-none focus:border-lightGray focus:ring-1 focus:ring-lightGray invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 rounded-2xl bg-slate-200" placeholder="Escribe un mensaje"></textarea>

            {{ if errors }}
            <span class="inline-block text-pink-500">
                Este campo no puede estar vacío.
            </span>
            {{ /if }}

        </div>
        <div class="py-1">
            {{ captcha }}

            {{ if error:captcha }}
            <p>{{ error:captcha }}</p>
            {{ /if }}

        </div>

        <input type="text" class="hidden" name="{{ honeypot ?? 'honeypot' }}" />

        <div class="transition-opacity hover:opacity-100 hover:ease-in">
            <button type="submit" class="bg-black text-white py-2 px-4 font-bold flex justify-center items-center md:w-1/2 w-full transition-all ease-in hover:bg-slate-700 focus:ring-4 focus:bg-black focus:ring-black/50 active:bg-slate-700 active:ring-4 active:ring-slatebg-slate-700/50 disabled:bg-opacity-50 rounded-full ">
                Enviar mensaje
            </button>
        </div>
    </div>
</body>


{{ /form:contact }}
@endantlers
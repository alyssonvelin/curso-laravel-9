@csrf
<input type="text" name="name" id="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}" class="md:w-1/6 bg-gray-200 appearance-none">
<input type="email" name="email" id="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}" class="md:w-1/6 bg-gray-200 appearance-none">
<input type="password" name="password" id="password" placeholder="Senha" class="md:w-1/6 bg-gray-200 appearance-none">
<button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none">Enviar</button>
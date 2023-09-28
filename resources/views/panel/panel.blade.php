@extends('panel.layout.layout')
@section('content')
    <div class="bg-gray-200 p-4">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4"></h1>
            <div>
                <div class="max-w-md mx-auto bg-white p-8 border rounded shadow">
                    <h2 class="text-xl font-semibold mb-4">Send Single SMS</h2>
                    <form action="/send-single-sms" method="POST">
                        @csrf
                        <!-- Receiver number -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-normal mb-2" for="name">Receiver number</label>
                            <input

                                name="receiver_number" id="name" type="text" placeholder="for example 09121234567"
                                class="required appearance-none border rounded w-full py-2 px-3
                                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('receiver_number')
                            <p class="text-red-500 text-xs italic mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Message -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-normal mb-2" for="message">Message</label>
                            <textarea
                                name="message" id="message" placeholder="Your Text"
                                class="required appearance-none border rounded w-full py-2 px-3
                                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" ></textarea>
                            @error('message')
                            <p class="text-red-500 text-xs italic mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- submit -->
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

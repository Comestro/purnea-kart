@extends('become-seller.components.seller-layout')

@section('title')
    Pending
@endsection

@section('content')
    <!-- Breadcrumb -->
    <div class="w-full bg-gray-50 py-3 px-6">
        <div class="max-w-7xl mx-auto">
            <p class="text-gray-600 text-sm"><a href="#" class="hover:underline">Home</a> &gt; Not Approve
                Customer Page</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-10 mt-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Vendor Account Status</h1>

        <!-- Step 1: Welcome Message with Green Checkmark -->
        <div class="flex items-start bg-green-50 border-l-4 border-green-500 rounded-lg p-5 mb-4 shadow">
            <span class="text-2xl text-green-500 mr-3">&#10004;</span> <!-- Green Checkmark Icon -->
            <div>
                <p class="text-2xl text-green-700 font-bold">Step 1: Welcome</p>
                <p class="text-gray-700">You’ve successfully logged in as a vendor. Your account is currently awaiting
                    further action from the admin.</p>
            </div>
        </div>

        <!-- Step 2: Application Reviewed with Green Checkmark -->
        <div class="flex items-start bg-green-50 border-l-4 border-green-500 rounded-lg p-5 mb-4 shadow">
            <span class="text-2xl text-green-500 mr-3">&#10004;</span> <!-- Green Checkmark Icon -->
            <div>
                <p class="text-2xl text-green-700 font-bold">Step 2: Application Reviewed</p>
                <p class="text-gray-700">Our admin team has reviewed your application. Thank you for your patience as we
                    finalize the process.</p>
            </div>
        </div>

        <!-- Step 3: Pending Approval Message -->
        <div class="flex items-start bg-yellow-50 border-l-4 border-yellow-500 rounded-lg p-5 shadow">
            <span class="text-2xl text-yellow-500 mr-3">3.</span> <!-- Step number without checkmark -->
            <div>
                <p class="text-2xl text-yellow-700 font-bold">Step 3: Awaiting Final Approval</p>
                <p class="text-gray-700">Your vendor account is pending final approval. You’ll be notified by email once
                    it’s complete. If you have any questions, feel free to contact us at [support email/contact number].</p>
            </div>
        </div>
    </div>
@endsection

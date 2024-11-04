import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import { Input, Button } from './Index'; // Assuming these are custom components
import { useDispatch } from 'react-redux';
import { useForm } from 'react-hook-form';
import { login } from '../store/authSlice';
import { createaccount } from '../services/authService';

function SignUp() {
  const navigate = useNavigate();
  const dispatch = useDispatch();
  const { register, handleSubmit } = useForm();
  const [error, setError] = useState('');

  const signup = async (data) => {
    console.log(data);
    setError('');
    try {
      const userData = await createaccount(data);
      if (userData) {
        //   let loginned  = login(userData);
        //   const fetchedUser = await getuser();
        // if (fetchedUser) dispatch(loginned);
        dispatch(userData);
        navigate('/login');
      }
    } catch (error) {
      setError(error.message);
    }
  };

  return (
    <div className="flex items-center justify-center min-h-screen bg-gray-50 px-4">
      <div className="mx-auto w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 className="text-center text-3xl font-semibold mb-4 text-gray-800">
          Create Your Account
        </h2>

        {/* Error Message */}
        {error && (
          <p className="text-red-600 text-center mb-4">{error}</p>
        )}

        <form onSubmit={handleSubmit(signup)} className="space-y-6">
          <Input
            label="Full Name"
            placeholder="Enter your full name"
            {...register('name', { required: true })}
          />

          <Input
            label="Email"
            placeholder="Enter your email"
            type="email"
            {...register('email', {
              required: true,
              validate: {
                matchPattern: (value) =>
                  /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(value) ||
                  'Email address must be valid',
              },
            })}
          />

          <Input
            label="Password"
            placeholder="Enter your password"
            type="password"
            {...register('password', { required: true })}
          />

          <Button type="submit" className="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg transition duration-200">
            Sign Up
          </Button>
        </form>

        <p className="mt-4 text-center text-gray-600">
          Already have an account?{' '}
          <span
            onClick={() => navigate('/login')}
            className="text-blue-600 hover:underline cursor-pointer"
          >
            Sign In
          </span>
        </p>
      </div>
    </div>
  );
}

export default SignUp;

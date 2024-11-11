import React, { useState } from 'react';
import {Button, Input} from './Index'
import {useForm} from 'react-hook-form'

function LoginPopup() {
  const [isOpen, setIsOpen] = useState(false);
  const {register, handleSubmit} = useForm()

  const openPopup = () => setIsOpen(true);
  const closePopup = () => setIsOpen(false);

  return (
    <div className="flex items-center justify-center">
      {/* Login Button */}
      <button
        onClick={openPopup}
        // className="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
        Login
      </button>

      {/* Popup Modal */}
      {isOpen && (
        <div className="fixed inset-0 flex items-center justify-center space-between bg-black bg-opacity-50">
            
           
          <div className="bg-white relative p-8 rounded-lg shadow-lg w-80 ">
            {/* Close Button */}
            <button
              onClick={closePopup}
              className="absolute text-black hover:text-gray-600 focus:outline-none top-2 right-2 " 
            >
              X
    
            </button>
            
            <h2 className="text-xl font-semibold mb-4">Login</h2>
            <form className="space-y-4">
            <Input
                className="w-full border border-gray-300 rounded-md px-3 py-2 "
                label="Email: "
                placeholder="Enter your email"
                type="email"
                {...register("email", {   
                    required: true, // these are option for email that we need for email input field 
                    validate: {
                        matchPatern: (value) => /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(value) ||
                        "Email address must be a valid address",
                    }
                })}
                />
               <Button
                type="submit"
                className="w-full bg-blue-400" >Next</Button>
                <p className="mt-2 text-center text-base text-black/60">
                    Don&apos;t have an account?&nbsp;
                    {/* <Link
                        to="/signup"
                        className="font-medium text-primary transition-all duration-200 hover:underline"
                    >
                    </Link> */}
                </p>
            </form>
          </div>
        </div>
      )}
    </div>
  );
}

export default LoginPopup;

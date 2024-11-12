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
        //className="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
        Login
      </button>

      {/* Popup Modal */}
      {isOpen && (
        <div className="fixed inset-0 flex items-center justify-center space-between bg-opacity-100">
            
           
          <div className="bg-white relative p-8 rounded-lg shadow-2xl w-96 ">
            {/* Close Button */}
            <button
              onClick={closePopup}
              className="absolute text-black/60 hover:text-gray-600 focus:outline-none top-2 right-2 mt-4 " 
            >
              X
    
            </button>
            
            <h2 className="text-xs text-black/60 mb-4">Login</h2>
            <form className="space-y-4">
            <Input
                className="w-full border text-xs border-gray-300 rounded-md px-3 py-2.5 "
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
                className="w-full bg-blue-400 text-xs py-2.5" >Next</Button>
                <p className="mt-2 text-center text-xs text-black/60">
                    Don&apos;t have an account?&nbsp;
                    {/* <Link
                        to="/signup"
                        className="font-medium text-primary transition-all duration-200 hover:underline"
                    >
                    </Link> */}
                </p>
                <Button
                 className="w-[55%] flex ml-16 text-center text-xs px-3 py-2 text-blue-400 border-blue-500 border-2 bg-white rounded-md" >Register for New account</Button>
                 <p className='text-xs  text-black/60'>By continuing, you agree to Flipkart’s <span className='text-blue-400'>Terms of Use</span> & <span className='text-blue-400'>Privacy Policy</span>
                 Site protected by reCAPTCHA & Google Privacy Policy . Terms apply</p>
            </form>
          </div>
        </div>
      )}
    </div>
  );
}

export default LoginPopup;

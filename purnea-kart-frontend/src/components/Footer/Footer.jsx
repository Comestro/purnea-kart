import React from 'react';

const Footer = () => {
  return (
    <footer className="bg-gray-800 text-white py-10 mt-10">
      <div className="container mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-6">
        {/* About Section */}
        <div>
          <h4 className="font-semibold mb-4">ABOUT</h4>
          <ul>
            <li className="mb-2 hover:underline cursor-pointer">Contact Us</li>
            <li className="mb-2 hover:underline cursor-pointer">About Us</li>
            <li className="mb-2 hover:underline cursor-pointer">Careers</li>
            <li className="mb-2 hover:underline cursor-pointer">Press</li>
          </ul>
        </div>

        {/* Help Section */}
        <div>
          <h4 className="font-semibold mb-4">HELP</h4>
          <ul>
            <li className="mb-2 hover:underline cursor-pointer">Payments</li>
            <li className="mb-2 hover:underline cursor-pointer">Shipping</li>
            <li className="mb-2 hover:underline cursor-pointer">Cancellation</li>
            <li className="mb-2 hover:underline cursor-pointer">Returns</li>
          </ul>
        </div>

        {/* Policy Section */}
        <div>
          <h4 className="font-semibold mb-4">POLICY</h4>
          <ul>
            <li className="mb-2 hover:underline cursor-pointer">Return Policy</li>
            <li className="mb-2 hover:underline cursor-pointer">Terms of Use</li>
            <li className="mb-2 hover:underline cursor-pointer">Security</li>
            <li className="mb-2 hover:underline cursor-pointer">Privacy</li>
          </ul>
        </div>

        {/* Social Section */}
        <div>
          <h4 className="font-semibold mb-4">SOCIAL</h4>
          <ul>
            <li className="mb-2 hover:underline cursor-pointer">Facebook</li>
            <li className="mb-2 hover:underline cursor-pointer">Twitter</li>
            <li className="mb-2 hover:underline cursor-pointer">YouTube</li>
            <li className="mb-2 hover:underline cursor-pointer">Instagram</li>
          </ul>
        </div>
      </div>

      {/* Divider */}
      <div className="border-t border-gray-700 mt-8"></div>

      {/* Footer Bottom Section */}
      <div className="container mx-auto px-4 mt-6 text-center">
        <p className="text-sm text-gray-400">
          © 2024 Flipkart Clone. All rights reserved.
        </p>
      </div>
    </footer>
  );
};

export default Footer;

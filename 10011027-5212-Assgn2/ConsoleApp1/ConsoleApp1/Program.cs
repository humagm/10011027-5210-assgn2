using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Customer
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string Phone { get; set; }

        public Customer(string FName, string LName, string PhNo)
        {
            string FirstName = FName;
            string LastName = LName;
            string Phone = PhNo;



        }

        public string getCustomer()
        {
            string customerData = FirstName + "\t" + LastName + "\t" + Phone;
            return customerData;
        }

    }
}

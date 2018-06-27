using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsForms_Assignment3
{
    public partial class Form1 : Form
    {
        List<Customer> customerDB;
        public Form1()
        {
            InitializeComponent();
            customerDB = new List<Customer>();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            loadDB();
            DisplayCustomers();
        }
        public void loadDB()
        {
            customerDB.Add(new Customer("Jaarna", "Kereopa", "123-2514"));
            customerDB.Add(new Customer("Sue", "Stook", "123-1263"));
            customerDB.Add(new Customer("Jamie", "Allom", "123-3658"));
            customerDB.Add(new Customer("Brian", "Janes", "123-9898"));
        }
        public void clearBoxes()
        {
            FirstNameTB.Text = null;
            LastNameTB.Text = null;
            PhoneTB.Text = null;
        }
        public void clearDisplay()
        {
            listBox.ClearSelected();
        }

        public void DisplayCustomers()
        {
            foreach (var customer in customerDB)
            {
                customerListBox.Items.Add(customer.getCustomer());
            }
        }
        private void SearchButton1_Click(object sender, EventArgs e)
        {
            string searchText = searchTB.Text;
            {
                MessageBox.Show(customerListBox.text + "You must enter a CustomerName");
            }
        }
        private void customerListButton_Click(object sender, EventArgs e)
        {
            clearDisplay();
            DisplayCustomers();
        }
        private void clearListButton_Click(object sender, EventArgs e)
        {
            clearDisplay();
            searchTB.Focus();
            addButton.Enabled = true;
        }
    }
        private void clearButton_Click(object sender, EventArgs e)
        {
            clearBoxes();
            addButton.Enabled = true;
        }


        private void button1_Click(object sender, EventArgs e)
        {

        }
    }
}

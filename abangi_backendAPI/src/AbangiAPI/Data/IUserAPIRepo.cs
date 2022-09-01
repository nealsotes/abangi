using System;
using System.Collections.Generic;
using System.Linq;
using AbangiAPI.Models;
using System.Threading.Tasks;

namespace AbangiAPI.Data
{
    public interface IUserAPIRepo
    {
        bool SaveChanges();
        IEnumerable<User> GetAllUsers();
        User GetUserById(int id);
        void CreateUser(User user);
        void UpdateUser(User user);
        void DeleteUser(User user);

    }
}
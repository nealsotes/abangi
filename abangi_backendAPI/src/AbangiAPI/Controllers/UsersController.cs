using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;

namespace AbangiAPI.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UsersController : ControllerBase
    {
        // GET api/users
        [HttpGet]
        public ActionResult<IEnumerable<string>> Get()
        {
            return new string[] { "valswwue1", "valuee2" };
        }
    }
}
from TestCase import *
from WasRun import *

class TestCaseTest(TestCase):
	
	def setUp(self):
		print 'setUp TestCaseTest'
		test = WasRun("testMethod")

	def testTemplateMethod(self):
		print 'testTemplateMethod'
		self.test.run()
		assert("setUp testMethod tearDown" == test.log)


print "let's call to testTemplateMethod"
TestCaseTest("testTemplateMethod").run()
print "let's call to testResult"
TestCaseTest("testResult").run()